<?php
namespace Fox\Modules\Crm\SelectManagers;

class Lead extends \Fox\Core\SelectManagers\Base
{
    protected function filterActive(&$result)
    {
        $result['whereClause'][] = array(
            'status!=' => ['Converted', 'Recycled', 'Dead']
        );
    }

    protected function filterConverted(&$result)
    {
        $result['whereClause'][] = array(
            'status=' => 'Converted'
        );
    }
 }

