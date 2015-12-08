<?php
namespace Fox\Controllers;

use \Fox\Core\Exceptions\Error;

class Notification extends \Fox\Core\Controllers\Base
{
    public static $defaultAction = 'list';

    public function actionList($params, $data, $request)
    {
        $scope = $params['scope'];
        $id = $params['id'];

        $userId = $this->getUser()->id;

        $offset = intval($request->get('offset'));
        $maxSize = intval($request->get('maxSize'));

        $params = array(
            'offset' => $offset,
            'maxSize' => $maxSize,
        );

        $result = $this->getService('Notification')->getList($userId, $params);

        return array(
            'total' => $result['total'],
            'list' => $result['collection']->toArray()
        );
    }

    public function actionNotReadCount()
    {
        $userId = $this->getUser()->id;
        return $this->getService('Notification')->getNotReadCount($userId);
    }

    public function postActionMarkAllRead($params, $data, $request)
    {
        $userId = $this->getUser()->id;
        return $this->getService('Notification')->markAllRead($userId);
    }
}

