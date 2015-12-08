<?php
namespace Fox\Acl;

use \Fox\Entities\User;
use \Fox\ORM\Entity;

class Email extends \Fox\Core\Acl\Base
{

    public function checkEntityRead(User $user, Entity $entity, $data)
    {
        if ($this->checkEntity($user, $entity, $data, 'read')) {
            return true;
        }

        if ($data === false) {
            return false;
        }
        if (is_array($data)) {
            if (empty($data['read']) || $data['read'] == 'no') {
                return false;
            }
        }

        if (!$entity->has('usersIds')) {
            $entity->loadLinkMultipleField('users');
        }
        $userIdList = $entity->get('usersIds');
        if (is_array($userIdList) && in_array($user->id, $userIdList)) {
            return true;
        }
        return false;
    }

    public function checkIsOwner(User $user, Entity $entity)
    {
        if ($entity->has('assignedUserId')) {
            if ($user->id === $entity->get('assignedUserId')) {
                return true;
            }
        }

        if ($user->id === $entity->get('createdById')) {
            return true;
        }

        return false;
    }

}

