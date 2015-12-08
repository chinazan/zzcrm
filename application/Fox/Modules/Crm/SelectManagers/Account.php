<?php
namespace Fox\Modules\Crm\SelectManagers;

class Account extends \Fox\Core\SelectManagers\Base
{
    protected function filterPartners(&$result)
    {
        $result['whereClause'][] = array(
            'type' => 'Partner'
        );
    }

    protected function filterCustomers(&$result)
    {
        $result['whereClause'][] = array(
            'type' => 'Customer'
        );
    }

    protected function filterResellers(&$result)
    {
        $result['whereClause'][] = array(
            'type' => 'Reseller'
        );
    }

 }

