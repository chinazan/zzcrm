<?php
namespace Fox\Controllers;

class I18n extends \Fox\Core\Controllers\Base
{

    public function actionRead($params, $data)
    {
        return $this->getContainer()->get('language')->getAll();
    }
}
