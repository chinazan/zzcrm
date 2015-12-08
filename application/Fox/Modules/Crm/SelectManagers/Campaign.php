<?php
namespace Fox\Modules\Crm\SelectManagers;

class Campaign extends \Fox\Core\SelectManagers\Base
{
    protected function filterActive(&$result)
    {
        $result['whereClause'][] = array(
            'status' => 'Active'
        );
    }

 }

