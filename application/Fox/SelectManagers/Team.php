<?php
namespace Fox\SelectManagers;

class Team extends \Fox\Core\SelectManagers\Base
{

    protected function boolFilterOnlyMy(&$result)
    {
        if (!in_array('users', $result['joins'])) {
        	$result['joins'][] = 'users';
        }
        $result['whereClause'][] = array(
        	'usersMiddle.userId' => $this->getUser()->id
        );
        $result['distinct'] = true;
    }
}

