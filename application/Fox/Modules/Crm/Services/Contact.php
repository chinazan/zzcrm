<?php
namespace Fox\Modules\Crm\Services;

use \Fox\ORM\Entity;

class Contact extends \Fox\Services\Record
{
    protected $mergeLinkList = [
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
                if ($this->getConfig()->get('b2cMode')) {
                    $email->set(array(
                        'parentType' => 'Contact',
                        'parentId' => $entity->id
                    ));
                } else {
                    if ($entity->get('accountId')) {
                        $email->set(array(
                            'parentType' => 'Account',
                            'parentId' => $entity->get('accountId')
                        ));
                    }
                }
                $this->getEntityManager()->saveEntity($email);
            }
        }
    }
}

