<?php
namespace Fox\Services;

use \Fox\Core\Exceptions\Forbidden;
use \Fox\Core\Exceptions\Error;
use \Fox\Core\Exceptions\NotFound;

use \Fox\ORM\Entity;

class User extends Record
{
    const PASSWORD_CHANGE_REQUEST_LIFETIME = 360; // minutes

    protected function init()
    {
        $this->dependencies[] = 'container';
    }

    protected $internalFields = array('password');

    protected function getMailSender()
    {
        return $this->getContainer()->get('mailSender');
    }

    protected function getLanguage()
    {
        return $this->getContainer()->get('language');
    }

    protected function getFileManager()
    {
        return $this->getContainer()->get('fileManager');
    }

    protected function getContainer()
    {
        return $this->injections['container'];
    }

    public function getEntity($id = null)
    {
        if (isset($id) && $id == 'system') {
            throw new Forbidden();
        }

        $entity = parent::getEntity($id);
        if ($entity && $entity->get('isSuperAdmin') && !$this->getUser()->get('isSuperAdmin')) {
            throw new Forbidden();
        }
        return $entity;
    }

    public function findEntities($params)
    {
        if (empty($params['where'])) {
            $params['where'] = array();
        }
        $params['where'][] = array(
            'type' => 'notEquals',
            'field' => 'id',
            'value' => 'system'
        );

        $result = parent::findEntities($params);
        return $result;
    }

    public function changePassword($userId, $password, $checkCurrentPassword = false, $currentPassword)
    {
        $user = $this->getEntityManager()->getEntity('User', $userId);
        if (!$user) {
            throw new NotFound();
        }

        if ($user->get('isSuperAdmin') && !$this->getUser()->get('isSuperAdmin')) {
            throw new Forbidden();
        }

        if (empty($password)) {
            throw new Error('Password can\'t be empty.');
        }

        if ($checkCurrentPassword) {
            $passwordHash = new \Fox\Core\Utils\PasswordHash($this->getConfig());
            $u = $this->getEntityManager()->getRepository('User')->where(array(
                'id' => $user->id,
                'password' => $passwordHash->hash($currentPassword)
            ))->findOne();
            if (!$u) {
                throw new Forbidden();
            }
        }

        $user->set('password', $this->hashPassword($password));

        $this->getEntityManager()->saveEntity($user);

        return true;
    }

    public function passwordChangeRequest($userName, $emailAddress)
    {
        $user = $this->getEntityManager()->getRepository('User')->where(array(
            'userName' => $userName,
            'emailAddress' => $emailAddress
        ))->findOne();

        if (empty($user)) {
            throw new NotFound();
        }

        if (!$user->isActive()) {
            throw new NotFound();
        }

        $userId = $user->id;

        $passwordChangeRequest = $this->getEntityManager()->getRepository('PasswordChangeRequest')->where(array(
            'userId' => $userId
        ))->findOne();
        if ($passwordChangeRequest) {
            throw new Forbidden();
        }

        $requestId = uniqid();

        $passwordChangeRequest = $this->getEntityManager()->getEntity('PasswordChangeRequest');
        $passwordChangeRequest->set(array(
            'userId' => $userId,
            'requestId' => $requestId
        ));

        $this->sendChangePasswordLink($requestId, $emailAddress);

        $this->getEntityManager()->saveEntity($passwordChangeRequest);

        if (!$passwordChangeRequest->id) {
            throw new Error();
        }

        $dt = new \DateTime();
        $dt->add(new \DateInterval('PT'. self::PASSWORD_CHANGE_REQUEST_LIFETIME . 'M'));

        $job = $this->getEntityManager()->getEntity('Job');

        $job->set(array(
            'serviceName' => 'User',
            'method' => 'removeChangePasswordRequestJob',
            'data' => json_encode(array(
                'id' => $passwordChangeRequest->id,
            )),
            'executeTime' => $dt->format('Y-m-d H:i:s') ,
        ));

        $this->getEntityManager()->saveEntity($job);

        return true;
    }

    public function removeChangePasswordRequestJob($data)
    {
        if (empty($data['id'])) {
            return;
        }
        $id = $data['id'];

        $p = $this->getEntityManager()->getEntity('PasswordChangeRequest', $id);
        if ($p) {
            $this->getEntityManager()->removeEntity($p);
        }
        return true;
    }

    protected function hashPassword($password)
    {
        $config = $this->getConfig();
        $passwordHash = new \Fox\Core\Utils\PasswordHash($config);

        return $passwordHash->hash($password);
    }

    public function createEntity($data)
    {
        $newPassword = null;
        if (array_key_exists('password', $data)) {
            $newPassword = $data['password'];
            $data['password'] = $this->hashPassword($data['password']);
        }
        if (!$this->getUser()->get('isSuperAdmin')) {
            unset($data['isSuperAdmin']);
        }

        $user = parent::createEntity($data);

        if (!is_null($newPassword)) {
            if ($user->isActive()) {
                $this->sendPassword($user, $newPassword);
            }
        }

        return $user;
    }

    public function updateEntity($id, $data)
    {
        if ($id == 'system') {
            throw new Forbidden();
        }
        $newPassword = null;
        if (array_key_exists('password', $data)) {
            $newPassword = $data['password'];
            $data['password'] = $this->hashPassword($data['password']);
        }

        if ($id == $this->getUser()->id) {
            unset($data['isActive']);
        }
        if (!$this->getUser()->get('isSuperAdmin')) {
            unset($data['isSuperAdmin']);
        }


        $user = parent::updateEntity($id, $data);

        if (!is_null($newPassword)) {
            try {
                if ($user->isActive()) {
                    $this->sendPassword($user, $newPassword);
                }
            } catch (\Exception $e) {}
        }

        return $user;
    }

    protected function beforeCreate(Entity $entity, array $data = array())
    {
        if ($this->getConfig()->get('userLimit') && !$this->getUser()->get('isSuperAdmin')) {
            $userCount = $this->getEntityManager()->getRepository('User')->where(array(
                'isActive' => true,
                'isSuperAdmin' => false,
                'id!=' => 'system'
            ))->count();
            if ($userCount >= $this->getConfig()->get('userLimit')) {
                throw new Forbidden('User limit '.$this->getConfig()->get('userLimit').' is reached.');
            }
        }
    }

    protected function beforeUpdate(Entity $user, array $data = array())
    {
        if ($this->getConfig()->get('userLimit') && !$this->getUser()->get('isSuperAdmin')) {
            if (!$user->isActive()) {
                if (array_key_exists('isActive', $data) && $data['isActive']) {
                    $userCount = $this->getEntityManager()->getRepository('User')->where(array(
                        'isActive' => true,
                        'isSuperAdmin' => false,
                        'id!=' => 'system'
                    ))->count();
                    if ($userCount >= $this->getConfig()->get('userLimit')) {
                        throw new Forbidden('User limit '.$this->getConfig()->get('userLimit').' is reached.');
                    }
                }
            }
        }
    }

    protected function sendPassword(Entity $user, $password)
    {
        $emailAddress = $user->get('emailAddress');

        if (empty($emailAddress)) {
            return;
        }

        $email = $this->getEntityManager()->getEntity('Email');

        if (!$this->getConfig()->get('smtpServer')) {
            return;
        }


        $subject = $this->getLanguage()->translate('accountInfoEmailSubject', 'messages', 'User');
        $body = $this->getLanguage()->translate('accountInfoEmailBody', 'messages', 'User');

        $body = str_replace('{userName}', $user->get('userName'), $body);
        $body = str_replace('{password}', $password, $body);
        $body = str_replace('{siteUrl}', $this->getConfig()->get('siteUrl'), $body);

        $email->set(array(
            'subject' => $subject,
            'body' => $body,
            'isHtml' => false,
            'to' => $emailAddress
        ));

        $this->getMailSender()->send($email);
    }

    protected function sendChangePasswordLink($requestId, $emailAddress, Entity $user = null)
    {
        if (empty($emailAddress)) {
            return;
        }

        $email = $this->getEntityManager()->getEntity('Email');

        if (!$this->getConfig()->get('smtpServer')) {
            return;
        }

        $subject = $this->getLanguage()->translate('passwordChangeLinkEmailSubject', 'messages', 'User');
        $body = $this->getLanguage()->translate('passwordChangeLinkEmailBody', 'messages', 'User');

        $link = $this->getConfig()->get('siteUrl') . '?entryPoint=changePassword&id=' . $requestId;

        $body = str_replace('{link}', $link, $body);

        $email->set(array(
            'subject' => $subject,
            'body' => $body,
            'isHtml' => false,
            'to' => $emailAddress
        ));

        $this->getMailSender()->send($email);
    }

    public function deleteEntity($id)
    {
        if ($id == 'system') {
            throw new Forbidden();
        }
        if ($id == $this->getUser()->id) {
            throw new Forbidden();
        }
        return parent::deleteEntity($id);
    }

    public function afterUpdate(Entity $entity, array $data)
    {
        parent::afterUpdate($entity, $data);
        if (array_key_exists('rolesIds', $data) || array_key_exists('teamsIds', $data)) {
            $this->clearRoleCache($entity->id);
        }

        if (array_key_exists('agentId', $data)) {
            $agentId = $entity->get('agentId');
            $agentEntity = $this->getEntityManager()->getEntity('Agent', $agentId);
            $agentEntity->set(array(
                'userId' => $entity->id
            ));
            $this->getEntityManager()->saveEntity($agentEntity);
        }
    }

    public function afterCreate(Entity $entity, array $data = array())
    {
        parent::afterCreate($entity, $data); // TODO: Change the autogenerated stub
        if (array_key_exists('agentId', $data)) {
            $agentId = $entity->get('agentId');
            $agentEntity = $this->getEntityManager()->getEntity('Agent', $agentId);
            $agentEntity->set(array(
                'userId' => $entity->id
            ));
            $this->getEntityManager()->saveEntity($agentEntity);
        }
    }

    protected function clearRoleCache($id)
    {
        $this->getFileManager()->removeFile('data/cache/application/acl/' . $id . '.php');
    }
}

