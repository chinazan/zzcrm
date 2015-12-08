<?php
namespace Fox\Modules\Crm\Entities;

class CampaignTrackingUrl extends \Fox\Core\ORM\Entity
{
    protected function _getUrlToUse()
    {
        return '{trackingUrl:' . $this->id . '}';
    }

    protected function _hasUrlToUse()
    {
        return !$this->isNew();
    }
}
