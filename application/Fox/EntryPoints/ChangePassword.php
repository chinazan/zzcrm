<?php
namespace Fox\EntryPoints;

use \Fox\Core\Exceptions\NotFound;
use \Fox\Core\Exceptions\Forbidden;
use \Fox\Core\Exceptions\BadRequest;

class ChangePassword extends \Fox\Core\EntryPoints\Base
{
    public static $authRequired = false;

    public function run()
    {
        $requestId = $_GET['id'];
        if (empty($requestId)) {
            throw new BadRequest();
        }

        $config = $this->getConfig();
        $themeManager = $this->getThemeManager();

        $p = $this->getEntityManager()->getRepository('PasswordChangeRequest')->where(array(
            'requestId' => $requestId
        ))->findOne();

        if (!$p) {
            throw new NotFound();
        }

        $runScript = "
                    app.getController('PasswordChangeRequest', function (controller) {
                        controller.doAction('passwordChange', '{$requestId}');
                    });
        ";

        $html = file_get_contents('main.html');
        $html = str_replace('{{cacheTimestamp}}', $config->get('cacheTimestamp', 0), $html);
        $html = str_replace('{{useCache}}', $config->get('useCache') ? 'true' : 'false' , $html);
        $html = str_replace('{{stylesheet}}', $themeManager->getStylesheet(), $html);
        $html = str_replace('{{runScript}}', $runScript , $html);
        echo $html;
        exit;
    }

    protected function getThemeManager()
    {
        return $this->getContainer()->get('themeManager');
    }
}

