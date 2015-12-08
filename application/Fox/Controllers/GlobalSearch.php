<?php
namespace Fox\Controllers;

use \Fox\Core\Exceptions\Error,
    \Fox\Core\Exceptions\Forbidden;

class GlobalSearch extends \Fox\Core\Controllers\Base
{
    public function actionSearch($params, $data, $request)
    {
        $query = $params['query'];

        $offset = intval($request->get('offset'));
        $maxSize = intval($request->get('maxSize'));

        return $this->getService('GlobalSearch')->find($query, $offset, $maxSize);
    }
}

