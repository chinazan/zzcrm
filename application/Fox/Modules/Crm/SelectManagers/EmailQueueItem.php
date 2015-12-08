<?php
namespace Fox\Modules\Crm\SelectManagers;

class EmailQueueItem extends \Fox\Core\SelectManagers\Base
{

    protected function filterPending(&$result)
    {
        $result['whereClause'][] = array(
            'status=' => 'Pending'
        );
    }

    protected function filterSent(&$result)
    {
        $result['whereClause'][] = array(
            'status=' => 'Sent'
        );
    }

    protected function filterFailed(&$result)
    {
        $result['whereClause'][] = array(
            'status=' => 'Failed'
        );
    }
}

