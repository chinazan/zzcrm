<?php
namespace Fox\Modules\Crm\Acl;

use \Fox\Entities\User;
use \Fox\ORM\Entity;

class CampaignLogRecord extends \Fox\Core\Acl\Base
{

    public function checkIsOwner(User $user, Entity $entity)
    {
        if ($entity->has('campaignId')) {
            $campaignId = $entity->get('campaignId');
            if (!$campaignId) return;

            $campaign = $this->getEntityManager()->getEntity('Campaign', $campaignId);
            if ($campaign && $this->getAclManager()->getImplementation('Campaign')->checkIsOwner($user, $campaign)) {
                return true;
            }
        }
        return;
    }

    public function checkInTeam(User $user, Entity $entity)
    {
        if ($entity->has('campaignId')) {
            $campaignId = $entity->get('campaignId');
            if (!$campaignId) return;

            $campaign = $this->getEntityManager()->getEntity('Campaign', $campaignId);
            if ($campaign && $this->getAclManager()->getImplementation('Campaign')->checkInTeam($user, $campaign)) {
                return true;
            }
        }
        return;
    }
}

