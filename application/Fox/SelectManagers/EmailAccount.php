<?php
namespace Fox\SelectManagers;

class EmailAccount extends \Fox\Core\SelectManagers\Base
{
    public function access(&$result)
    {
        if (!$this->user->isAdmin()) {
        	$result['whereClause'][] = array(
        		'assignedUserId' => $this->user->id
        	);
        }
    }
}

