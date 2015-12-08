<?php
namespace Fox\Hooks\Note;

use Fox\ORM\Entity;

class Notifications extends \Fox\Core\Hooks\Base
{
    protected $notificationService = null;

    public static $order = 14;

    protected function init()
    {
        $this->dependencies[] = 'serviceFactory';
    }

    protected function getServiceFactory()
    {
        return $this->getInjection('serviceFactory');
    }

    protected function getMentionedUserIdList($entity)
    {
        $mentionedUserList = array();
        $data = $entity->get('data');
        if (($data instanceof \stdClass) && ($data->mentions instanceof \stdClass)) {
            $mentions = get_object_vars($data->mentions);
            foreach ($mentions as $d) {
                $mentionedUserList[] = $d->id;
            }
        }
        return $mentionedUserList;
    }

    protected function getSubscriberIdList($parentType, $parentId)
    {
        $pdo = $this->getEntityManager()->getPDO();
        $sql = "
            SELECT user_id AS userId
            FROM subscription
            WHERE entity_id = " . $pdo->quote($parentId) . " AND entity_type = " . $pdo->quote($parentType);
        $sth = $pdo->prepare($sql);
        $sth->execute();
        $userIdList = [];
        while ($row = $sth->fetch(\PDO::FETCH_ASSOC)) {
            if ($this->getUser()->id != $row['userId']) {
                $userIdList[] = $row['userId'];
            }
        }
        return $userIdList;
    }

    public function afterSave(Entity $entity)
    {
        if ($entity->isNew()) {
            $parentType = $entity->get('parentType');
            $parentId = $entity->get('parentId');

            $superParentType = $entity->get('superParentType');
            $superParentTypeId = $entity->get('superParentTypeId');

            $userIdList = [];

            if ($parentType && $parentId) {
				$userIdList = array_merge($userIdList, $this->getSubscriberIdList($parentType, $parentId));
            }

            if ($superParentType && $superParentTypeId) {
				$userIdList = array_merge($userIdList, $this->getSubscriberIdList($superParentType, $superParentTypeId));
            }

            //$userIdList = array_merge($userIdList, $this->getMentionedUserIdList($entity));

            $userIdList = array_unique($userIdList);

            if (!empty($userIdList)) {
            	$this->getNotificationService()->notifyAboutNote($userIdList, $entity);
            }
        }
    }

    protected function getNotificationService()
    {
        if (empty($this->notificationService)) {
            $this->notificationService = $this->getServiceFactory()->create('Notification');
        }
        return $this->notificationService;
    }
}

