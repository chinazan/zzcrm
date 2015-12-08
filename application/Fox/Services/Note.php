<?php
namespace Fox\Services;

use \Fox\Core\Exceptions\Forbidden;
use \Fox\Core\Exceptions\NotFound;

use Fox\ORM\Entity;

class Note extends Record
{
    public function getEntity($id = null)
    {
        $entity = parent::getEntity($id);
        if (!empty($id)) {
            $entity->loadAttachments();
        }
        return $entity;
    }

    public function createEntity($data)
    {
        if (!empty($data['parentType']) && !empty($data['parentId'])) {
            $entity = $this->getEntityManager()->getEntity($data['parentType'], $data['parentId']);
            if ($entity) {
                if (!$this->getAcl()->check($entity, 'read')) {
                    throw new Forbidden();
                }
            }
        }


        return parent::createEntity($data);
    }

}

