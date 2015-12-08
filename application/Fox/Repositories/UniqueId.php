<?php
namespace Fox\Repositories;

use Fox\ORM\Entity;

class UniqueId extends \Fox\Core\ORM\Repositories\RDB
{
    protected function getNewEntity()
    {
        $entity = parent::getNewEntity();
        $entity->set('name', uniqid());
        return $entity;
    }
}

