<?php
namespace Fox\Modules\Crm\Controllers;

use \Fox\Core\Exceptions\Error;
use \Fox\Core\Exceptions\BadRequest;

class Lead extends \Fox\Core\Controllers\Record
{
    public function actionConvert($params, $data, $request)
    {
        if (empty($data['id'])) {
            throw new BadRequest();
        }
        if (!$request->isPost()) {
            throw new BadRequest();
        }
        $entity = $this->getRecordService()->convert($data['id'], $data['records']);

        if (!empty($entity)) {
            return $entity->toArray();
        }
        throw new Error();
    }
}
