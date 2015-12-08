<?php
namespace Fox\Modules\Crm\SelectManagers;

class Document extends \Fox\Core\SelectManagers\Base
{
    protected function filterActive(&$result)
    {
        $result['whereClause'][] = array(
            'status' => 'Active'
        );
    }

    protected function filterDraft(&$result)
    {
        $result['whereClause'][] = array(
            'status' => 'Draft'
        );
    }

 }

