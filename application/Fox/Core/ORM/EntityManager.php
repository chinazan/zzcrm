<?php
namespace Fox\Core\ORM;

use \Fox\Core\Utils\Util;

class EntityManager extends \Fox\ORM\EntityManager
{
    protected $espoMetadata;

    private $hookManager;

    protected $user;

    protected $container;

    private $repositoryClassNameHash = array();

    private $entityClassNameHash = array();

    public function setContainer(\Fox\Core\Container $container)
    {
        $this->container = $container;
    }

    public function getContainer()
    {
        return $this->container;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getFoxMetadata()
    {
        return $this->espoMetadata;
    }

    public function setFoxMetadata($espoMetadata)
    {
        $this->espoMetadata = $espoMetadata;
    }

    public function setHookManager(\Fox\Core\HookManager $hookManager)
    {
        $this->hookManager = $hookManager;
    }

    public function getHookManager()
    {
        return $this->hookManager;
    }

    public function normalizeRepositoryName($name)
    {
        if (empty($this->repositoryClassNameHash[$name])) {
            $className = '\\Fox\\Custom\\Repositories\\' . Util::normilizeClassName($name);
            if (!class_exists($className)) {
                $className = $this->espoMetadata->getRepositoryPath($name);
            }
            $this->repositoryClassNameHash[$name] = $className;
        }
        return $this->repositoryClassNameHash[$name];
    }

    public function normalizeEntityName($name)
    {
        if (empty($this->entityClassNameHash[$name])) {
            $className = '\\Fox\\Custom\\Entities\\' . Util::normilizeClassName($name);
            if (!class_exists($className)) {
                $className = $this->espoMetadata->getEntityPath($name);
            }
            $this->entityClassNameHash[$name] = $className;
        }
        return $this->entityClassNameHash[$name];
    }
}

