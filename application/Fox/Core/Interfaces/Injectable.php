<?php
namespace Fox\Core\Interfaces;

interface Injectable
{
    public function getDependencyList();
    
    public function inject($name, $object);
}

