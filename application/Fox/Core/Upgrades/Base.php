<?php
namespace Fox\Core\Upgrades;

use Fox\Core\Utils\Util,
    Fox\Core\Utils\Json,
    Fox\Core\Exceptions\Error;

abstract class Base
{
    private $container;

    protected $name = null;

    protected $params = array();

    const UPLOAD = 'upload';

    const INSTALL = 'install';

    const UNINSTALL = 'uninstall';

    const DELETE = 'delete';

    public function __construct($container)
    {
        $this->container = $container;

        $this->actionManager = new ActionManager($this->name, $container, $this->params);
    }

    protected function getContainer()
    {
        return $this->container;
    }

    protected function getActionManager()
    {
        return $this->actionManager;
    }

    public function getManifest()
    {
        return $this->getActionManager()->getManifest();
    }

    public function upload($data)
    {
        $this->getActionManager()->setAction(self::UPLOAD);

        return $this->getActionManager()->run($data);
    }

    public function install($processId)
    {
        $this->getActionManager()->setAction(self::INSTALL);

        return $this->getActionManager()->run($processId);
    }

    public function uninstall($processId)
    {
        $this->getActionManager()->setAction(self::UNINSTALL);

        return $this->getActionManager()->run($processId);
    }

    public function delete($processId)
    {
        $this->getActionManager()->setAction(self::DELETE);

        return $this->getActionManager()->run($processId);
    }
}
