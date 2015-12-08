<?php

namespace Fox\Custom\Controllers;

class Agent extends \Fox\Core\Templates\Controllers\Base
{
    public function actionPutAgentStatus($params, $data, $request){

        $data = [
            'status' => $request->get('status')
        ];

        $ids = $this->getRecordService()->getEntityByName($request->get('agent'));

        if ($entity = $this->getRecordService()->updateEntity($ids[0], $data)) {
            return $entity->toArray();
        }


        throw new Error();
    }
}
