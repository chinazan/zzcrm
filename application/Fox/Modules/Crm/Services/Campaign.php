<?php
namespace Fox\Modules\Crm\Services;

use \Fox\ORM\Entity;

class Campaign extends \Fox\Services\Record
{
    public function loadAdditionalFields($entity)
    {
        parent::loadAdditionalFields($entity);


        $sentCount = $this->getEntityManager()->getRepository('CampaignLogRecord')->where(array(
            'campaignId' => $entity->id,
            'action' => 'Sent'
        ))->count();
        $entity->set('sentCount', $sentCount);

        $openedCount = $this->getEntityManager()->getRepository('CampaignLogRecord')->where(array(
            'campaignId' => $entity->id,
            'action' => 'Opened'
        ))->count();
        $entity->set('openedCount', $openedCount);

        $clickedCount = $this->getEntityManager()->getRepository('CampaignLogRecord')->where(array(
            'campaignId' => $entity->id,
            'action' => 'Clicked'
        ))->count();
        $entity->set('clickedCount', $clickedCount);

        $optedOutCount = $this->getEntityManager()->getRepository('CampaignLogRecord')->where(array(
            'campaignId' => $entity->id,
            'action' => 'Opted Out'
        ))->count();
        $entity->set('optedOutCount', $optedOutCount);

        $bouncedCount = $this->getEntityManager()->getRepository('CampaignLogRecord')->where(array(
            'campaignId' => $entity->id,
            'action' => 'Bounced'
        ))->count();
        $entity->set('bouncedCount', $bouncedCount);

        $leadCreatedCount = $this->getEntityManager()->getRepository('Lead')->where(array(
            'campaignId' => $entity->id
        ))->count();
        $entity->set('leadCreatedCount', $leadCreatedCount);

        $entity->set('revenueCurrency', $this->getConfig()->get('defaultCurrency'));

        $params = array(
            'select' => array('SUM:amountConverted'),
            'whereClause' => array(
                'status' => 'Closed Won',
                'campaignId' => $entity->id
            ),
            'groupBy' => array('opportunity.campaignId')
        );

        $this->getEntityManager()->getRepository('Opportunity')->handleSelectParams($params);


        $sql = $this->getEntityManager()->getQuery()->createSelectQuery('Opportunity', $params);


        $pdo = $this->getEntityManager()->getPDO();
        $sth = $pdo->prepare($sql);
        $sth->execute();

        if ($row = $sth->fetch(\PDO::FETCH_ASSOC)) {
            $revenue = floatval($row['SUM:amountConverted']);
            if ($revenue > 0) {
                $entity->set('revenue', $revenue);
            }
        }
    }

    public function logSent($campaignId, $queueItemId = null, Entity $target, Entity $emailOrEmailTemplate = null, $emailAddress, $actionDate = null)
    {
        if (empty($actionDate)) {
            $actionDate = date('Y-m-d H:i:s');
        }
        $logRecord = $this->getEntityManager()->getEntity('CampaignLogRecord');
        $logRecord->set(array(
            'campaignId' => $campaignId,
            'actionDate' => $actionDate,
            'parentId' => $target->id,
            'parentType' => $target->getEntityType(),
            'action' => 'Sent',
            'stringData' => $emailAddress,
            'queueItemId' => $queueItemId
        ));

        if ($emailOrEmailTemplate) {
            $logRecord->set(array(
                'objectId' => $emailOrEmailTemplate->id,
                'objectType' => $emailOrEmailTemplate->getEntityType()
            ));
        }
        $this->getEntityManager()->saveEntity($logRecord);
    }

    public function logBounced($campaignId, $queueItemId = null, Entity $target, $emailAddress, $isHard = false, $actionDate = null)
    {
        if ($queueItemId && $this->getEntityManager()->getRepository('CampaignLogRecord')->where(array(
            'queueItemId' => $queueItemId,
            'action' => 'Bounced'
        ))->findOne()) {
            return;
        }
        if (empty($actionDate)) {
            $actionDate = date('Y-m-d H:i:s');
        }
        $logRecord = $this->getEntityManager()->getEntity('CampaignLogRecord');
        $logRecord->set(array(
            'campaignId' => $campaignId,
            'actionDate' => $actionDate,
            'parentId' => $target->id,
            'parentType' => $target->getEntityType(),
            'action' => 'Bounced',
            'stringData' => $emailAddress,
            'queueItemId' => $queueItemId
        ));
        if ($isHard) {
            $logRecord->set('stringAdditionalData', 'Hard');
        } else {
            $logRecord->set('stringAdditionalData', 'Soft');
        }
        $this->getEntityManager()->saveEntity($logRecord);
    }

    public function logOptedOut($campaignId, $queueItemId = null, Entity $target, $emailAddress = null, $actionDate = null)
    {
        if ($queueItemId && $this->getEntityManager()->getRepository('CampaignLogRecord')->where(array(
            'queueItemId' => $queueItemId,
            'action' => 'Opted Out'
        ))->findOne()) {
            return;
        }
        if (empty($actionDate)) {
            $actionDate = date('Y-m-d H:i:s');
        }
        $logRecord = $this->getEntityManager()->getEntity('CampaignLogRecord');
        $logRecord->set(array(
            'campaignId' => $campaignId,
            'actionDate' => $actionDate,
            'parentId' => $target->id,
            'parentType' => $target->getEntityType(),
            'action' => 'Opted Out',
            'stringData' => $emailAddress,
            'queueItemId' => $queueItemId
        ));
        $this->getEntityManager()->saveEntity($logRecord);
    }

    public function logOpened($campaignId, $queueItemId = null, Entity $target, $actionDate = null)
    {
        if (empty($actionDate)) {
            $actionDate = date('Y-m-d H:i:s');
        }

        if ($queueItemId && $this->getEntityManager()->getRepository('CampaignLogRecord')->where(array(
            'queueItemId' => $queueItemId,
            'action' => 'Opened',
        ))->findOne()) {
            return;
        }
        $queueItem = $this->getEntityManager()->getEntity('EmailQueueItem', $queueItemId);
        if ($queueItem) {
            $massEmail = $this->getEntityManager()->getEntity('MassEmail', $queueItem->get('massEmailId'));
            if ($massEmail && $massEmail->id) {
                $logRecord = $this->getEntityManager()->getEntity('CampaignLogRecord');
                $logRecord->set(array(
                    'campaignId' => $campaignId,
                    'actionDate' => $actionDate,
                    'parentId' => $target->id,
                    'parentType' => $target->getEntityType(),
                    'action' => 'Opened',
                    'objectId' => $massEmail->get('emailTemplateId'),
                    'objectType' => 'EmailTemplate',
                    'queueItemId' => $queueItemId
                ));
                $this->getEntityManager()->saveEntity($logRecord);
            }
        }
    }

    public function logClicked($campaignId, $queueItemId = null, Entity $target, Entity $trackingUrl, $actionDate = null)
    {
        $this->logOpened($campaignId, $queueItemId, $target);

        if ($queueItemId && $this->getEntityManager()->getRepository('CampaignLogRecord')->where(array(
            'queueItemId' => $queueItemId,
            'action' => 'Clicked',
            'objectId' => $trackingUrl->id,
            'objectType' => $trackingUrl->getEntityType()
        ))->findOne()) {
            return;
        }
        if (empty($actionDate)) {
            $actionDate = date('Y-m-d H:i:s');
        }

        $logRecord = $this->getEntityManager()->getEntity('CampaignLogRecord');
        $logRecord->set(array(
            'campaignId' => $campaignId,
            'actionDate' => $actionDate,
            'parentId' => $target->id,
            'parentType' => $target->getEntityType(),
            'action' => 'Clicked',
            'objectId' => $trackingUrl->id,
            'objectType' => $trackingUrl->getEntityType(),
            'queueItemId' => $queueItemId
        ));
        $this->getEntityManager()->saveEntity($logRecord);
    }

}

