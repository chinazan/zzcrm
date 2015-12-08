<?php
namespace Fox\Core\Acl;

use \Fox\Core\Interfaces\Injectable;

use \Fox\Entities\User;
use \Fox\ORM\Entity;

class Base implements Injectable
{
    protected $dependencies = array(
        'config',
        'entityManager',
        'aclManager'
    );

    protected $injections = array();

    public function inject($name, $object)
    {
        $this->injections[$name] = $object;
    }

    public function __construct()
    {
        $this->init();
    }

    protected function init()
    {
    }

    protected function getInjection($name)
    {
        return $this->injections[$name];
    }

    protected function addDependency($name)
    {
        $this->dependencies[] = $name;
    }

    public function getDependencyList()
    {
        return $this->dependencies;
    }

    protected function getConfig()
    {
        return $this->getInjection('config');
    }

    protected function getEntityManager()
    {
        return $this->getInjection('entityManager');
    }

    protected function getAclManager()
    {
        return $this->getInjection('aclManager');
    }

    public function checkReadOnlyTeam(User $user, $data)
    {
        if (empty($data) || !is_array($data) || !isset($data['read'])) {
            return false;
        }
        return $data['read'] === 'team';
    }

    public function checkReadOnlyOwn(User $user, $data)
    {
        if (empty($data) || !is_array($data) || !isset($data['read'])) {
            return false;
        }
        return $data['read'] === 'own';
    }

    public function checkEntity(User $user, Entity $entity, $data, $action)
    {
        return $this->checkScope($user, $data, $entity->getEntityType(), $action, null, null, $entity);
    }

    public function checkScope(User $user, $data, $scope, $action = null, $isOwner = null, $inTeam = null, Entity $entity = null)
    {
        if (is_null($data)) {
            return false;
        }
        if ($data === false) {
            return false;
        }
        if ($data === true) {
            return true;
        }

        if (!is_null($action)) {
            if (array_key_exists($action, $data)) {
                $value = $data[$action];

                if ($value === 'all' || $value === true) {
                    return true;
                }

                if (!$value || $value === 'no') {
                    return false;
                }

                if (is_null($isOwner)) {
                    if ($entity) {
                        $isOwner = $this->checkIsOwner($user, $entity);
                    } else {
                        return true;
                    }
                }

                if ($isOwner) {
                    if ($value === 'own' || $value === 'team') {
                        return true;
                    }
                }
                if (is_null($inTeam) && $entity) {
                    $inTeam = $this->checkInTeam($user, $entity);
                }

                if ($inTeam) {
                    if ($value === 'team') {
                        return true;
                    }
                }
                return false;
            }
        }
        return true;
    }

    public function checkIsOwner(User $user, Entity $entity)
    {
        if ($entity->has('assignedUserId')) {
            if ($user->id === $entity->get('assignedUserId')) {
                return true;
            }
        } else {
            if ($entity->has('createdById')) {
                if ($user->id === $entity->get('createdById')) {
                    return true;
                }
            }
        }
        return false;
    }

    public function checkInTeam(User $user, Entity $entity)
    {
        $userTeamIds = $user->get('teamsIds');

        if (!$entity->hasRelation('teams') || !$entity->hasField('teamsIds')) {
            return false;
        }

        if (!$entity->has('teamsIds')) {
            $entity->loadLinkMultipleField('teams');
        }

        $teamIds = $entity->get('teamsIds');

        if (empty($teamIds)) {
            return false;
        }

        foreach ($userTeamIds as $id) {
            if (in_array($id, $teamIds)) {
                return true;
            }
        }
        return false;
    }

    public function checkEntityDelete(User $user, Entity $entity, $data)
    {
        $result = $this->checkEntity($user, $entity, $data, 'delete');
        if (!$result) {
            if (is_array($data)) {
                if ($data['edit'] != 'no') {
                    if ($entity->has('createdById') && $entity->get('createdById') == $user->id) {
                        if (!$entity->has('assignedUserId')) {
                            return true;
                        } else {
                            if (!$entity->get('assignedUserId')) {
                                return true;
                            }
                            if ($entity->get('assignedUserId') == $entity->get('createdById')) {
                                return true;
                            }
                        }
                    }
                }
            }
        }

        return $result;
    }
}

