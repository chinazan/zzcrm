<?php
namespace Fox\Notificators;

use \Fox\ORM\Entity;

class Email extends \Fox\Core\Notificators\Base
{
    protected function init()
    {
        $this->addDependency('serviceFactory');
    }

    private $streamService = null;

    protected function getStreamService()
    {
        if (empty($this->streamService)) {
            $this->streamService = $this->getInjection('serviceFactory')->create('Stream');
        }
        return $this->streamService;
    }

    public function process(Entity $entity)
    {
        if ($entity->get('status') !== 'Archived' && $entity->get('status') !== 'Sent') {
            return;
        }

        if ($entity->get('isJustSent')) {
            $previousUserIdList = [];
        } else {
            $previousUserIdList = $entity->getFetched('usersIds');
            if (!is_array($previousUserIdList)) {
                $previousUserIdList = [];
            }
        }

        $emailUserIdList = $entity->get('usersIds');

        if (is_null($emailUserIdList) || !is_array($emailUserIdList)) {
            return;
        }

        $userIdList = [];
        foreach ($emailUserIdList as $userId) {
            if (!in_array($userId, $userIdList) && !in_array($userId, $previousUserIdList) && $userId != $this->getUser()->id) {
                $userIdList[] = $userId;
            }
        }

        $data = array(
            'emailId' => $entity->id,
            'emailName' => $entity->get('name'),
        );

        if (!$entity->has('from')) {
            $this->getEntityManager()->getRepository('Email')->loadFromField($entity);
        }

        $from = $entity->get('from');
        if ($from) {
            $person = $this->getEntityManager()->getRepository('EmailAddress')->getEntityByAddress($from, null, ['User', 'Contact', 'Lead']);
            if ($person) {
                $data['personEntityType'] = $person->getEntityType();
                $data['personEntityName'] = $person->get('name');
                $data['personEntityId'] = $person->id;
            }
        }

        $userIdFrom = null;
        if ($person && $person->getEntityType() == 'User') {
            $userIdFrom = $person->id;
        }

        if (empty($data['personEntityId'])) {
            $data['fromString'] = \Fox\Services\Email::parseFromName($entity->get('fromString'));
            if (empty($data['fromString']) && $from) {
                $data['fromString'] = $from;
            }
        }

        $parent = null;
        if ($entity->get('parentId') && $entity->get('parentType')) {
            $parent = $this->getEntityManager()->getEntity($entity->get('parentType'), $entity->get('parentId'));
        }
        $account = null;
        if ($entity->get('accountId')) {
            $account = $this->getEntityManager()->getEntity('Account', $entity->get('accountId'));
        }

        foreach ($userIdList as $userId) {
            if ($userIdFrom == $userId) {
                continue;
            }
            if ($entity->get('status') == 'Archived') {
                if ($parent) {
                    if ($this->getStreamService()->checkIsFollowed($parent, $userId)) {
                        continue;
                    }
                }
                if ($account) {
                    if ($this->getStreamService()->checkIsFollowed($account, $userId)) {
                        continue;
                    }
                }
            }
            $notification = $this->getEntityManager()->getEntity('Notification');
            $notification->set(array(
                'type' => 'EmailReceived',
                'userId' => $userId,
                'data' => $data
            ));
            $this->getEntityManager()->saveEntity($notification);
        }
    }

}

