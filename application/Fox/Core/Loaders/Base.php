<?php
namespace Fox\Core\Loaders;

abstract class Base implements \Fox\Core\Interfaces\Loader
{
    private $container;

    public function __construct(\Fox\Core\Container $container)
    {
        $this->container = $container;
    }

    protected function getContainer()
    {
        return $this->container;
    }
}