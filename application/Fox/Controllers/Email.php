<?php
namespace Fox\Controllers;

use \Fox\Core\Exceptions\BadRequest;
use \Fox\Core\Exceptions\Forbidden;
use \Fox\Core\Exceptions\Error;

class Email extends \Fox\Core\Controllers\Record
{
    public function actionGetCopiedAttachments($params, $data, $request)
    {
        $id = $request->get('id');

        return $this->getRecordService()->getCopiedAttachments($id);
    }

    public function actionSendTestEmail($params, $data, $request)
    {
        if (!$request->isPost()) {
            throw new BadRequest();
        }

        if (is_null($data['password'])) {
            if ($data['type'] == 'preferences') {
                if (!$this->getUser()->isAdmin() && $data['id'] != $this->getUser()->id) {
                    throw new Forbidden();
                }
                $preferences = $this->getEntityManager()->getEntity('Preferences', $data['id']);
                if (!$preferences) {
                    throw new Error();
                }

                $data['password'] = $this->getContainer()->get('crypt')->decrypt($preferences->get('smtpPassword'));
            } else {
                if (!$this->getUser()->isAdmin()) {
                    throw new Forbidden();
                }
                $data['password'] = $this->getConfig()->get('smtpPassword');
            }
        }

        return $this->getRecordService()->sendTestEmail($data);
    }

    public function postActionMarkAsRead($params, $data, $request)
    {
        if (!empty($data['ids'])) {
            $ids = $data['ids'];
        } else {
            if (!empty($data['id'])) {
                $ids = [$data['id']];
            } else {
                throw new BadRequest();
            }
        }
        return $this->getRecordService()->markAsReadByIds($ids);
    }

    public function postActionMarkAsNotRead($params, $data, $request)
    {
        if (!empty($data['ids'])) {
            $ids = $data['ids'];
        } else {
            if (!empty($data['id'])) {
                $ids = [$data['id']];
            } else {
                throw new BadRequest();
            }
        }
        return $this->getRecordService()->markAsNotReadByIds($ids);
    }

    public function postActionMarkAllAsRead($params, $data, $request)
    {
        return $this->getRecordService()->markAllAsRead();
    }

    public function postActionMarkAsImportant($params, $data, $request)
    {
        if (!empty($data['ids'])) {
            $ids = $data['ids'];
        } else {
            if (!empty($data['id'])) {
                $ids = [$data['id']];
            } else {
                throw new BadRequest();
            }
        }
        return $this->getRecordService()->markAsImportantByIds($ids);
    }

    public function postActionMarkAsNotImportant($params, $data, $request)
    {
        if (!empty($data['ids'])) {
            $ids = $data['ids'];
        } else {
            if (!empty($data['id'])) {
                $ids = [$data['id']];
            } else {
                throw new BadRequest();
            }
        }
        return $this->getRecordService()->markAsNotImportantByIds($ids);
    }
}

