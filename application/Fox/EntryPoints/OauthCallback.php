<?php
namespace Fox\EntryPoints;

use \Fox\Core\Exceptions\NotFound;
use \Fox\Core\Exceptions\Forbidden;
use \Fox\Core\Exceptions\BadRequest;

class OauthCallback extends \Fox\Core\EntryPoints\Base
{
    public static $authRequired = false;

    public function run()
    {
        echo "FoxCRM rocks !!!";
    }
}

