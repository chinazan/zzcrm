<?php
namespace Fox\Modules\Crm\SelectManagers;

class Opportunity extends \Fox\Core\SelectManagers\Base
{
    protected function filterOpen(&$result)
    {
        $result['whereClause'][] = array(
            'stage!=' => ['Closed Won', 'Closed Lost']
        );
    }

    protected function filterWon(&$result)
    {
        $result['whereClause'][] = array(
            'stage=' => 'Closed Won'
        );
    }

    protected function filterLost(&$result)
    {
        $result['whereClause'][] = array(
            'stage=' => 'Closed Lost'
        );
    }

    protected function filterIsTemplate(&$result)
    {
        $result['whereClause'][] = array(
            'isTemplate=' => true
        );
    }

 }

