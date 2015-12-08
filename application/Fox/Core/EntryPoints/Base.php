<?php
namespace Fox\Core\EntryPoints;

use \Fox\Core\Container;

use \Fox\Core\Exceptions\Forbidden;

abstract class Base
{
    private $container;

    public static $authRequired = true;

    protected function getContainer()
    {
        return $this->container;
    }

    protected function getUser()
    {
        return $this->getContainer()->get('user');
    }

    protected function getAcl()
    {
        return $this->getContainer()->get('acl');
    }

    protected function getEntityManager()
    {
        return $this->getContainer()->get('entityManager');
    }

    protected function getServiceFactory()
    {
        return $this->getContainer()->get('serviceFactory');
    }

    protected function getConfig()
    {
        return $this->getContainer()->get('config');
    }

    protected function getMetadata()
    {
        return $this->getContainer()->get('metadata');
    }

    protected function getDateTime()
    {
        return $this->getContainer()->get('dateTime');
    }

    protected function getNumber()
    {
        return $this->getContainer()->get('number');
    }

    protected function getFileManager()
    {
        return $this->getContainer()->get('fileManager');
    }

    protected function getLanguage()
    {
        return $this->getContainer()->get('language');
    }

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    abstract public function run();

}

