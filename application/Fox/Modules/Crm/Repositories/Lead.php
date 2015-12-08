<?php
namespace Fox\Modules\Crm\Repositories;

use Fox\ORM\Entity;

class Lead extends \Fox\Core\ORM\Repositories\RDB
{
    public function afterSave(Entity $entity, array $options)
    {
        parent::afterSave($entity, $options);

        if ($entity->has('targetListId')) {
        	$this->relate($entity, 'targetLists', $entity->get('targetListId'));
        }
    }
}

