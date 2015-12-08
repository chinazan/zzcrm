<?php
namespace Fox\Modules\Crm\SelectManagers;

class Meeting extends \Fox\Core\SelectManagers\Base
{
    protected function boolFilterOnlyMy(&$result)
    {
        if (!in_array('users', $result['joins'])) {
        	$result['joins'][] = 'users';
        }
        $result['whereClause'][] = array(
        	'users.id' => $this->getUser()->id,
            'OR' => array(
                'usersMiddle.status!=' => 'Declined',
                'usersMiddle.status=' => null
            )
        );
    }

    protected function filterPlanned(&$result)
    {
        $result['whereClause'][] = array(
        	'status' => 'Planned'
        );
    }

    protected function filterHeld(&$result)
    {
        $result['whereClause'][] = array(
        	'status' => 'Held'
        );
    }

    protected function filterTodays(&$result)
    {
        $result['whereClause'][] = $this->convertDateTimeWhere(array(
        	'type' => 'today',
        	'field' => 'dateStart',
        	'timeZone' => $this->getUserTimeZone()
        ));
    }
}

