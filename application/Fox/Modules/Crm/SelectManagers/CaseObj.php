<?php
namespace Fox\Modules\Crm\SelectManagers;

class CaseObj extends \Fox\Core\SelectManagers\Base
{
    protected function boolFilterOpen(&$result)
    {
        $this->filterOpen($result);
    }

    protected function filterOpen(&$result)
    {
        $result['whereClause'][] = array(
            'status!=' => array('Duplicate', 'Rejected', 'Closed')
        );
    }

    protected function filterClosed(&$result)
    {
        $result['whereClause'][] = array(
            'status' => array('Closed')
        );
    }
}

