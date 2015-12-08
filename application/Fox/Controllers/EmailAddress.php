<?php
namespace Fox\Controllers;

class EmailAddress extends \Fox\Core\Controllers\Record
{
    public function actionSearchInAddressBook($params, $data, $request)
    {
        $q = $request->get('q');
        $limit = intval($request->get('limit'));
        if (empty($limit) || $limit > 30) {
            $limit = 5;
        }
        return $this->getRecordService()->searchInAddressBook($q, $limit);
    }
}

