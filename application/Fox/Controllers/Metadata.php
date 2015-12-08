<?php
namespace Fox\Controllers;

class Metadata extends \Fox\Core\Controllers\Base
{

    public function actionRead($params, $data)
    {
        return $this->getMetadata()->getAll(true);
    }
}
