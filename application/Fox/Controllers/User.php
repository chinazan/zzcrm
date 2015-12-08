<?php
namespace Fox\Controllers;

use \Fox\Core\Exceptions\Error;
use \Fox\Core\Exceptions\NotFound;
use \Fox\Core\Exceptions\Forbidden;
use \Fox\Core\Exceptions\BadRequest;

class User extends \Fox\Core\Controllers\Record
{
    public function actionAcl($params, $data, $request)
    {
        $userId = $request->get('id');
        if (empty($userId)) {
            throw new Error();
        }

        if (!$this->getUser()->isAdmin() && $this->getUser()->id != $userId) {
            throw new Forbidden();
        }

        $user = $this->getEntityManager()->getEntity('User', $userId);
        if (empty($user)) {
            throw new NotFound();
        }

        return $this->getAclManager()->getMap($user);
    }

    public function actionChangeOwnPassword($params, $data, $request)
    {
        if (!$request->isPost()) {
            throw new BadRequest();
        }
        if (!array_key_exists('password', $data) || !array_key_exists('currentPassword', $data)) {
            throw new BadRequest();
        }
        return $this->getService('User')->changePassword($this->getUser()->id, $data['password'], true, $data['currentPassword']);
    }

    public function actionChangePasswordByRequest($params, $data, $request)
    {
        if (!$request->isPost()) {
            throw new BadRequest();
        }
        if (empty($data['requestId']) || empty($data['password'])) {
            throw new BadRequest();
        }

        $p = $this->getEntityManager()->getRepository('PasswordChangeRequest')->where(array(
            'requestId' => $data['requestId']
        ))->findOne();

        if (!$p) {
            throw new Forbidden();
        }
        $userId = $p->get('userId');
        if (!$userId) {
            throw new Error();
        }

        $this->getEntityManager()->removeEntity($p);

        return $this->getService('User')->changePassword($userId, $data['password']);
    }

    public function actionPasswordChangeRequest($params, $data, $request)
    {
        if (!$request->isPost()) {
            throw new Forbidden();
        }

        if (empty($data['userName']) || empty($data['emailAddress'])) {
            throw new BadRequest();
        }

        $userName = $data['userName'];
        $emailAddress = $data['emailAddress'];

        return $this->getService('User')->passwordChangeRequest($userName, $emailAddress);
    }
}

