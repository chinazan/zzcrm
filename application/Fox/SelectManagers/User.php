<?php
namespace Fox\SelectManagers;

class User extends \Fox\Core\SelectManagers\Base
{
    protected function access(&$result)
    {
        parent::access($result);

        if (!$this->getUser()->isAdmin()) {
            $result['whereClause'][] = array(
                'isActive' => true
            );
        }
        $result['whereClause'][] = array(
            'isSuperAdmin' => false
        );
    }

    protected function filterActive(&$result)
    {
        $result['whereClause'][] = array(
            'isActive' => true
        );
    }

    protected function boolFilterOnlyMyTeam(&$result)
    {
        $teamIds = $this->getUser()->get('teamsIds');
        if (empty($teamIds)) {
            $teamIds = [];
        }

        if (!in_array('teams', $result['joins'])) {
        	$result['joins'][] = 'teams';
        }
        $result['whereClause'][] = array(
        	'teamsMiddle.teamId' => $teamIds
        );
        $result['distinct'] = true;
    }
}

