<?php
namespace Fox\Acl;

use \Fox\Entities\User;
use \Fox\ORM\Entity;

class EmailFilter extends \Fox\Core\Acl\Base
{
    public function checkIsOwner(User $user, Entity $entity)
    {
        if ($entity->has('parentId') && $entity->has('parentType')) {
            $parentType = $entity->get('parentType');
            $parentId = $entity->get('parentId');
            if (!$parentType || !$parentId) return;

            $parent = $this->getEntityManager()->getEntity($parentType, $parentId);
            if ($parent && $parent->has('assignedUserId') && $parent->get('assignedUserId') === $user->id) {
                return true;
            }
        }

        return;
    }
}

