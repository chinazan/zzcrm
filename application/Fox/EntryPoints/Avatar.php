<?php
namespace Fox\EntryPoints;

use \Fox\Core\Exceptions\NotFound;
use \Fox\Core\Exceptions\Forbidden;
use \Fox\Core\Exceptions\BadRequest;
use \Fox\Core\Exceptions\Error;

class Avatar extends Image
{
    public static $authRequired = true;

    private $colorList = [
        [111,168,214],
        [237,197,85],
        [212,114,155],
        '#8093BD',
        [124,196,164],
        [138,124,194],
        [222,102,102],
        '#ABE3A1',
        '#E8AF64',
    ];

    protected function getColor($hash)
    {
        $length = strlen($hash);
        $sum = 0;
        for ($i = 0; $i < $length; $i++) {
            $sum += ord($hash[$i]);
        }
        $x = intval($sum % 128) + 1;

        $index = intval($x * count($this->colorList) / 128);
        return $this->colorList[$index];
    }

    public function run()
    {
        if (empty($_GET['id'])) {
            throw new BadRequest();
        }

        $userId = $_GET['id'];


        $user = $this->getEntityManager()->getEntity('User', $userId);
        if (!$user) {
            throw new NotFound();
        }

        if (isset($_GET['attachmentId'])) {
            $id = $_GET['attachmentId'];
            if ($id == 'false') {
                $id = false;
            }
        } else {
            $id = $user->get('avatarId');
        }

        $size = null;
        if (!empty($_GET['size'])) {
            $size = $_GET['size'];
        }

        if (!empty($id)) {
            $this->show($id, $size);
        } else {
            $identicon = new \Identicon\Identicon();
            if (empty($size)) {
                $size = 'small';
            }
            if (!empty($this->imageSizes[$size])) {
                $width = $this->imageSizes[$size][0];

                header('Cache-Control: max-age=360000, must-revalidate');
                header('Content-Type: image/png');

                ob_clean();
                flush();
                $identicon->displayImage($userId, $width, $this->getColor($userId));
                exit;
            }
        }
    }

}

