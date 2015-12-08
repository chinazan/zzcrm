<?php
namespace Fox\Repositories;

use Fox\ORM\Entity;

class Integration extends \Fox\Core\ORM\Repositories\RDB
{
    public function get($id = null)
    {     
        $entity = parent::get($id);        
        if (empty($entity) && !empty($id)) {
            $entity = $this->get();
            $entity->id = $id;
        }        
        return $entity;
    }
}

