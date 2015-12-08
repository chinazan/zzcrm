<?php
namespace Fox\Modules\Crm\Services;

use \Fox\Core\Exceptions\Error;
use \Fox\Core\Exceptions\Forbidden;

use \Fox\ORM\Entity;

class Lead extends \Fox\Services\Record
{
    protected $mergeLinkList = [
        'tasks',
        'meetings',
        'calls',
        'emails',
        'targetLists'
    ];

    protected function getDuplicateWhereClause(Entity $entity)
    {
        $data = array(
            'OR' => array(
                array(
                    'firstName' => $entity->get('firstName'),
                    'lastName' => $entity->get('lastName'),
                )
            )
        );
        if ($entity->get('emailAddress')) {
            $data['OR'][] = array(
                'emailAddress' => $entity->get('emailAddress'),
             );
        }

        return $data;
    }

    public function afterCreate($entity, array $data)
    {
        parent::afterCreate($entity, $data);
        if (!empty($data['emailId'])) {
            $email = $this->getEntityManager()->getEntity('Email', $data['emailId']);
            if ($email && !$email->get('parentId')) {
                $email->set(array(
                    'parentType' => 'Lead',
                    'parentId' => $entity->id
                ));
                $this->getEntityManager()->saveEntity($email);
            }
        }
        if ($entity->get('campaignId')) {
        	$campaign = $this->getEntityManager()->getEntity('Campaign', $entity->get('campaignId'));
        	if ($campaign) {
        		$log = $this->getEntityManager()->getEntity('CampaignLogRecord');
        		$log->set(array(
        			'action' => 'Lead Created',
        			'actionDate' => date('Y-m-d H:i:s'),
        			'parentType' => 'Lead',
        			'parentId' => $entity->id,
        			'campaignId' => $campaign->id
        		));
        		$this->getEntityManager()->saveEntity($log);
        	}
        }
    }

    public function convert($id, $recordsData)
    {
        $lead = $this->getEntity($id);

        if (!$this->getAcl()->check($lead, 'edit')) {
            throw new Forbidden();
        }

        $entityManager = $this->getEntityManager();

        if (!empty($recordsData->Account)) {
            $account = $entityManager->getEntity('Account');
            $account->set(get_object_vars($recordsData->Account));
            $entityManager->saveEntity($account);
            $lead->set('createdAccountId', $account->id);
        }
        if (!empty($recordsData->Opportunity)) {
            $opportunity = $entityManager->getEntity('Opportunity');
            $opportunity->set(get_object_vars($recordsData->Opportunity));
            if (isset($account)) {
                $opportunity->set('accountId', $account->id);
            }
            $entityManager->saveEntity($opportunity);
            $lead->set('createdOpportunityId', $opportunity->id);
        }
        if (!empty($recordsData->Contact)) {
            $contact = $entityManager->getEntity('Contact');
            $contact->set(get_object_vars($recordsData->Contact));
            if (isset($account)) {
                $contact->set('accountId', $account->id);
            }
            $entityManager->saveEntity($contact);
            if (isset($opportunity)) {
                $entityManager->getRepository('Contact')->relate($contact, 'opportunities', $opportunity);
            }
            $lead->set('createdContactId', $contact->id);
        }

        $lead->set('status', 'Converted');
        $entityManager->saveEntity($lead);

        if ($meetings = $lead->get('meetings')) {
            foreach ($meetings as $meeting) {
                if (!empty($contact)) {
                    $entityManager->getRepository('Meeting')->relate($meeting, 'contacts', $contact);
                }

                if (!empty($opportunity)) {
                    $meeting->set('parentId', $opportunity->id);
                    $meeting->set('parentType', 'Opportunity');
                    $entityManager->saveEntity($meeting);
                } else if (!empty($account)) {
                    $meeting->set('parentId', $account->id);
                    $meeting->set('parentType', 'Account');
                    $entityManager->saveEntity($meeting);
                }
            }
        }
        if ($calls = $lead->get('calls')) {
            foreach ($calls as $call) {
                if (!empty($contact)) {
                    $entityManager->getRepository('Call')->relate($call, 'contacts', $contact);
                }
                if (!empty($opportunity)) {
                    $call->set('parentId', $opportunity->id);
                    $call->set('parentType', 'Opportunity');
                    $entityManager->saveEntity($call);
                } else if (!empty($account)) {
                    $call->set('parentId', $account->id);
                    $call->set('parentType', 'Account');
                    $entityManager->saveEntity($call);
                }
            }
        }
        if ($emails = $lead->get('emails')) {
            foreach ($emails as $email) {
                if (!empty($opportunity)) {
                    $email->set('parentId', $opportunity->id);
                    $email->set('parentType', 'Opportunity');
                    $entityManager->saveEntity($email);
                } else if (!empty($account)) {
                    $email->set('parentId', $account->id);
                    $email->set('parentType', 'Account');
                    $entityManager->saveEntity($email);
                }
            }
        }

        $streamService = $this->getStreamService();
        if ($streamService->checkIsFollowed($lead, $this->getUser()->id)) {
            if (!empty($opportunity)) {
                $streamService->followEntity($opportunity, $this->getUser()->id);
            }
            if (!empty($account)) {
                $streamService->followEntity($account, $this->getUser()->id);
            }
            if (!empty($contact)) {
                $streamService->followEntity($contact, $this->getUser()->id);
            }
        }

        return $lead;
    }
}

