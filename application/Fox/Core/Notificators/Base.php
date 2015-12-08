<?php
namespace Fox\Core\Notificators;

use \Fox\Core\Interfaces\Injectable;

use \Fox\ORM\Entity;

class Base implements Injectable
{
    protected $dependencies = array(
        'user',
        'entityManager',
    );

    protected $injections = array();

    public static $order = 9;

    public function __construct()
    {
        $this->init();
    }

    protected function init()
    {
    }

    protected function addDependency($name)
    {
        $this->dependencies[] = $name;
    }

    public function getDependencyList()
    {
        return $this->dependencies;
    }

    protected function getInjection($name)
    {
        return $this->injections[$name];
    }

    public function inject($name, $object)
    {
        $this->injections[$name] = $object;
    }

    protected function getEntityManager()
    {
        return $this->injections['entityManager'];
    }

    protected function getUser()
    {
        return $this->injections['user'];
    }

    public function process(Entity $entity)
    {
        if ($entity->has('assignedUserId') && $entity->get('assignedUserId')) {
            $assignedUserId = $entity->get('assignedUserId');
            if ($assignedUserId != $this->getUser()->id && $entity->isFieldChanged('assignedUserId')) {
                $notification = $this->getEntityManager()->getEntity('Notification');
                $notification->set(array(
                    'type' => 'Assign',
                    'userId' => $assignedUserId,
                    'data' => array(
                        'entityType' => $entity->getEntityType(),
                        'entityId' => $entity->id,
                        'entityName' => $entity->get('name'),
                        'isNew' => $entity->isNew(),
                        'userId' => $this->getUser()->id,
                        'userName' => $this->getUser()->get('name')
                    )
                ));
                $this->getEntityManager()->saveEntity($notification);
            }
        }
    }

}

