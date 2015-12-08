<?php
namespace Fox\Controllers;

use \Fox\Core\Exceptions\Error;
use \Fox\Core\Exceptions\Forbidden;

class Job extends \Fox\Core\Controllers\Record
{
    protected function checkControllerAccess()
    {
        if (!$this->getUser()->isAdmin()) {
            throw new Forbidden();
        }
    }

    public function actionCreate($params, $data)
    {
        throw new Forbidden();
    }

    public function actionUpdate($params, $data)
    {
        throw new Forbidden();
    }

    public function actionPatch($params, $data)
    {
        throw new Forbidden();
    }

    public function actionListLinked($params, $data, $request)
    {
        throw new Forbidden();
    }

    public function actionMassUpdate($params, $data, $request)
    {
        throw new Forbidden();
    }

    public function actionCreateLink($params, $data)
    {
        throw new Forbidden();
    }

    public function actionRemoveLink($params, $data)
    {
        throw new Forbidden();
    }
}

