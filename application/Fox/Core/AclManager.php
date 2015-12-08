<?php
namespace Fox\Core;

use \Fox\Core\Exceptions\Error;

use \Fox\ORM\Entity;
use \Fox\Entities\User;
use \Fox\Core\Utils\Util;

class AclManager
{
    private $container;

    private $metadata;

    private $implementationHashMap = array();

    private $tableHashMap = array();

    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->metadata = $container->get('metadata');
    }

    protected function getContainer()
    {
        return $this->container;
    }

    public function getImplementation($scope)
    {
        if (empty($this->implementationHashMap[$scope])) {
            $normalizedName = Util::normilizeClassName($scope);

            $className = '\\Fox\\Custom\\Acl\\' . $normalizedName;
            if (!class_exists($className)) {
                $moduleName = $this->metadata->getScopeModuleName($scope);
                if ($moduleName) {
                    $className = '\\Fox\\Modules\\' . $moduleName . '\\Acl\\' . $normalizedName;
                } else {
                    $className = '\\Fox\\Acl\\' . $normalizedName;
                }
                if (!class_exists($className)) {
                    $className = '\\Fox\\Core\\Acl\\Base';
                }
            }

            if (class_exists($className)) {
                $acl = new $className();
                $dependencies = $acl->getDependencyList();
                foreach ($dependencies as $name) {
                    $acl->inject($name, $this->container->get($name));
                }
                $this->implementationHashMap[$scope] = $acl;
            } else {
                throw new Error();
            }
        }

        return $this->implementationHashMap[$scope];
    }

    protected function getTable(User $user)
    {
        $key = spl_object_hash($user);

        if (empty($this->tableHashMap[$key])) {
            $config = $this->getContainer()->get('config');
            $fileManager = $this->getContainer()->get('fileManager');
            $metadata = $this->getContainer()->get('metadata');

            $this->tableHashMap[$key] = new \Fox\Core\Acl\Table($user, $config, $fileManager, $metadata);
        }

        return $this->tableHashMap[$key];
    }

    public function getMap(User $user)
    {
        return $this->getTable($user)->getMap();
    }

    public function getLevel(User $user, $scope, $action)
    {
        if ($user->isAdmin()) {
            return 'all';
        }
        return $this->getTable($user)->getLevel($scope, $action);
    }

    public function get(User $user, $permission)
    {
        if ($user->isAdmin()) {
            return true;
        }
        return $this->getTable($user)->get($permission);
    }

    public function checkReadOnlyTeam(User $user, $scope)
    {
        if ($user->isAdmin()) {
            return false;
        }
        $data = $this->getTable($user)->getScopeData($scope);
        return $this->getImplementation($scope)->checkReadOnlyTeam($user, $data);
    }

    public function checkReadOnlyOwn(User $user, $scope)
    {
        if ($user->isAdmin()) {
            return false;
        }
        $data = $this->getTable($user)->getScopeData($scope);
        return $this->getImplementation($scope)->checkReadOnlyOwn($user, $data);
    }

    public function check(User $user, $subject, $action = null, $isOwner = null, $inTeam = null)
    {
        if ($user->isAdmin()) {
            return true;
        }
        if (is_string($subject)) {
            return $this->checkScope($user, $subject, $action, $isOwner, $inTeam);
        } else {
            $entity = $subject;
            if ($entity instanceof Entity) {
                $entityType = $entity->getEntityType();

                $impl = $this->getImplementation($entityType);
                $methodName = 'checkEntity' . ucfirst($action);
                if (method_exists($impl, $methodName)) {
                    $data = $this->getTable($user)->getScopeData($entityType);
                    return $impl->$methodName($user, $entity, $data);
                }

                return $this->checkEntity($user, $entity, $action);
            }
        }
    }

    public function checkEntity(User $user, Entity $entity, $action)
    {
        if ($user->isAdmin()) {
            return true;
        }
        $data = $this->getTable($user)->getScopeData($entity->getEntityType());
        return $this->getImplementation($entity->getEntityType())->checkEntity($user, $entity, $data, $action);
    }

    public function checkScope(User $user, $scope, $action = null, $isOwner = null, $inTeam = null, $entity = null)
    {
        if ($user->isAdmin()) {
            return true;
        }
        $data = $this->getTable($user)->getScopeData($scope);
        return $this->getImplementation($scope)->checkScope($user, $data, $scope, $action, $isOwner, $inTeam, $entity);
    }
}

