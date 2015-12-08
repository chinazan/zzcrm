<?php
namespace Fox\Modules\Crm\Controllers;

class EmailQueueItem extends \Fox\Core\Controllers\Record
{
    protected function checkControllerAccess()
    {
        if (!$this->getUser()->isAdmin()) {
            throw new Forbidden();
        }
    }
}
