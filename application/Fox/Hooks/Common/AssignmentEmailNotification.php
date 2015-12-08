<?php
namespace Fox\Hooks\Common;

use Fox\ORM\Entity;

class AssignmentEmailNotification extends \Fox\Core\Hooks\Base
{
    public function afterSave(Entity $entity)
    {
        if (
            $this->getConfig()->get('assignmentEmailNotifications')
            &&
            $entity->has('assignedUserId')
            &&
            in_array($entity->getEntityName(), $this->getConfig()->get('assignmentEmailNotificationsEntityList', array()))
        ) {

            $userId = $entity->get('assignedUserId');
            if (!empty($userId) && $userId != $this->getUser()->id && $entity->isFieldChanged('assignedUserId')) {
                $job = $this->getEntityManager()->getEntity('Job');
                $job->set(array(
                    'serviceName' => 'EmailNotification',
                    'method' => 'notifyAboutAssignmentJob',
                    'data' => json_encode(array(
                        'userId' => $userId,
                        'assignerUserId' => $this->getUser()->id,
                        'entityId' => $entity->id,
                        'entityType' => $entity->getEntityName()
                    )),
                    'executeTime' => date('Y-m-d H:i:s'),
                ));
                $this->getEntityManager()->saveEntity($job);
            }
        }
    }

}

