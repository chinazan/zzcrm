<?php
namespace Fox\Core\ORM;

use \Fox\Core\Interfaces\Injectable;

abstract class Repository extends \Fox\ORM\Repository implements Injectable
{
    protected $dependencies = array();

    protected $injections = array();

    public function inject($name, $object)
    {
        $this->injections[$name] = $object;
    }

    protected function getInjection($name)
    {
        return $this->injections[$name];
    }

    public function getDependencyList()
    {
        return $this->dependencies;
    }
}

