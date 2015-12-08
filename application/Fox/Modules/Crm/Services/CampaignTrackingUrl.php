<?php
namespace Fox\Modules\Crm\Services;

use \Fox\Core\Exceptions\Forbidden;
use \Fox\ORM\Entity;

class CampaignTrackingUrl extends \Fox\Services\Record
{
    protected function beforeCreate(Entity $entity, array $data = array())
    {
        parent::beforeCreate($entity, $data);
        if (!$this->getAcl()->check($entity, 'edit')) {
            throw new Forbidden();
        }
    }
}

