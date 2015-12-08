<?php
namespace Fox\Modules\Crm\Services;

use \Fox\ORM\Entity;

class Account extends \Fox\Services\Record
{
    protected $linkSelectParams = array(
        'contacts' => array(
            'additionalColumns' => array(
                'role' => 'accountRole'
            )
        )
    );

    protected $mergeLinkList = [
        'opportunities',
        'cases',
        'documents',
        'contacts',
        'tasks',
        'meetings',
        'calls',
        'emails',
        'meetingsPrimary',
        'callsPrimary',
        'emailsPrimary',
        'targetLists'
    ];

    protected function getDuplicateWhereClause(Entity $entity)
    {
        return array(
            'name' => $entity->get('name')
        );
    }
}

