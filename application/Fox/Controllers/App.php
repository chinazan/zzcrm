<?php
namespace Fox\Controllers;

use \Fox\Core\Exceptions\BadRequest;

class App extends \Fox\Core\Controllers\Base
{
    public function actionUser()
    {
        $preferences = $this->getPreferences()->toArray();
        unset($preferences['smtpPassword']);

        $user = $this->getUser();
        if (!$user->has('teamsIds')) {
            $user->loadLinkMultipleField('teams');
        }

        return array(
            'user' => $user->toArray(),
            'acl' => $this->getAcl()->getMap(),
            'preferences' => $preferences,
            'token' => $this->getUser()->get('token')
        );
    }

    public function postActionDestroyAuthToken($params, $data)
    {
        $token = $data['token'];
        if (empty($token)) {
            throw new BadRequest();
        }

        $auth = new \Fox\Core\Utils\Auth($this->getContainer());
        return $auth->destroyAuthToken($token);
    }
}

