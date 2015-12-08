<?php
namespace Fox\Controllers;

use \Fox\Core\Exceptions\Error;
use \Fox\Core\Exceptions\Forbidden;
use \Fox\Core\Exceptions\BadRequest;
use \Fox\Core\Exceptions\NotFound;

class Preferences extends \Fox\Core\Controllers\Base
{
    protected function getPreferences()
    {
        return $this->getContainer()->get('preferences');
    }

    protected function getEntityManager()
    {
        return $this->getContainer()->get('entityManager');
    }

    protected function getCrypt()
    {
        return $this->getContainer()->get('crypt');
    }

    protected function handleUserAccess($userId)
    {
        if (!$this->getUser()->isAdmin()) {
            if ($this->getUser()->id != $userId) {
                throw new Forbidden();
            }
        }
    }

    public function actionDelete($params, $data, $request)
    {
        $userId = $params['id'];
        if (empty($userId)) {
            throw new BadRequest();
        }
        if (!$request->isDelete()) {
            throw new BadRequest();
        }
        $this->handleUserAccess($userId);

        return $this->getEntityManager()->getRepository('Preferences')->resetToDefaults($userId);
    }

    public function actionPatch($params, $data, $request)
    {
        return $this->actionUpdate($params, $data, $request);
    }

    public function actionUpdate($params, $data, $request)
    {
        $userId = $params['id'];
        $this->handleUserAccess($userId);

        if (!$request->isPost() && !$request->isPatch() && !$request->isPut()) {
            throw new BadRequest();
        }

        if (array_key_exists('smtpPassword', $data)) {
            $data['smtpPassword'] = $this->getCrypt()->encrypt($data['smtpPassword']);
        }

        $user = $this->getEntityManager()->getEntity('User', $userId);

        $entity = $this->getEntityManager()->getEntity('Preferences', $userId);

        if ($entity && $user) {
            $entity->set($data);
            $this->getEntityManager()->saveEntity($entity);

            $entity->set('smtpEmailAddress', $user->get('emailAddress'));
            $entity->set('name', $user->get('name'));

            $entity->clear('smtpPassword');

            return $entity->toArray();
        }
        throw new Error();
    }

    public function actionRead($params)
    {
        $userId = $params['id'];
        $this->handleUserAccess($userId);

        $entity = $this->getEntityManager()->getEntity('Preferences', $userId);
        $user = $this->getEntityManager()->getEntity('User', $userId);

        if (!$entity || !$user) {
            throw new NotFound();
        }

        $entity->set('smtpEmailAddress', $user->get('emailAddress'));
        $entity->set('name', $user->get('name'));

        $entity->clear('smtpPassword');

        return $entity->toArray();
    }
}

