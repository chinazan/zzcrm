<?php
namespace Fox\EntryPoints;

use \Fox\Core\Exceptions\NotFound;
use \Fox\Core\Exceptions\Forbidden;
use \Fox\Core\Exceptions\BadRequest;
use \Fox\Core\Exceptions\Error;

class LogoImage extends Image
{
    public static $authRequired = false;

    public function run()
    {
        $this->imageSizes['small-logo'] = array(181, 44);

        $id = $this->getConfig()->get('companyLogoId');

        if (empty($id)) {
            throw new NotFound();
        }

        $size = null;
        if (!empty($_GET['size'])) {
            $size = $_GET['size'];
        }

        $this->show($id, $size);
    }
}

