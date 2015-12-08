<?php
namespace Fox\Modules\Crm\Services;

use \Fox\Core\Exceptions\Error;
use \Fox\Core\Exceptions\Forbidden;
use \Fox\ORM\Entity;

class Target extends \Fox\Services\Record
{
    protected function getDuplicateWhereClause(Entity $entity)
    {
        return array(
            'firstName' => $entity->get('firstName'),
            'lastName' => $entity->get('lastName'),
        );
    }

    public function convert($id)
    {
        $entityManager = $this->getEntityManager();
        $target = $this->getEntity($id);

        if (!$this->getAcl()->check($target, 'delete')) {
            throw new Forbidden();
        }
        if (!$this->getAcl()->check('Lead', 'read')) {
            throw new Forbidden();
        }

        $lead = $entityManager->getEntity('Lead');
        $lead->set($target->toArray());

        $entityManager->removeEntity($target);
        $entityManager->saveEntity($lead);

        return $lead;
    }
}

