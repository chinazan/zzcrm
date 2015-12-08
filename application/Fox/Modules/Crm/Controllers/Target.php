<?php
namespace Fox\Modules\Crm\Controllers;

use \Fox\Core\Exceptions\Error;
use \Fox\Core\Exceptions\BadRequest;
    
class Target extends \Fox\Core\Controllers\Record
{
    
    public function actionConvert($params, $data)
    {    
        
        if (empty($data['id'])) {
            throw new BadRequest();
        }
        $entity = $this->getRecordService()->convert($data['id']);
        
        if (!empty($entity)) {
            return $entity->toArray();
        }
        throw new Error();        
    }

}
