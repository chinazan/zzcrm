<?php
namespace Fox\Core\Upgrades;

use Fox\Core\Exceptions\Error;

class ActionManager
{
    private $managerName;

    private $container;

    private $objects;

    protected $currentAction;

    protected $params;

    public function __construct($managerName, $container, $params)
    {
        $this->managerName = $managerName;
        $this->container = $container;

        $params['name'] = $managerName;
        $this->params = $params;
    }

    protected function getManagerName()
    {
        return $this->managerName;
    }

    protected function getContainer()
    {
        return $this->container;
    }

    public function setAction($action)
    {
        $this->currentAction = $action;
    }

    public function getAction()
    {
        return $this->currentAction;
    }

    public function getParams()
    {
        return $this->params;
    }

    public function run($data)
    {
        $object = $this->getObject();

        return $object->run($data);
    }

    public function getManifest()
    {
        return $this->getObject()->getManifest();
    }

    protected function getObject()
    {
        $managerName = $this->getManagerName();
        $actionName = $this->getAction();

        if (!isset($this->objects[$managerName][$actionName])) {
            $class = '\Fox\Core\Upgrades\Actions\\' . ucfirst($managerName) . '\\' . ucfirst($actionName);

            if (!class_exists($class)) {
                throw new Error('Could not find an action ['.ucfirst($actionName).'], class ['.$class.'].');
            }

            $this->objects[$managerName][$actionName] = new $class($this->container, $this);
        }

        return $this->objects[$managerName][$actionName];
    }
}