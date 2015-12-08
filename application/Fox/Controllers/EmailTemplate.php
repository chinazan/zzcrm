<?php
namespace Fox\Controllers;

use \Fox\Core\Exceptions\Error;

class EmailTemplate extends \Fox\Core\Controllers\Record
{
    public function actionParse($params, $data, $request)
    {        
        $id = $request->get('id');
        $emailAddress = $request->get('emailAddress');
        if (empty($id)) {
            throw new Error();
        }
        
        return $this->getRecordService()->parse($id, array(
            'emailAddress' => $request->get('emailAddress'),
            'parentType' => $request->get('parentType'),
            'parentId' => $request->get('parentId'),
        ), true);
    }

}

