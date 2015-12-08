<?php
namespace Fox\Controllers;

use Fox\Core\Utils as Utils;
use \Fox\Core\Exceptions\Error;
use \Fox\Core\Exceptions\Forbidden;
use \Fox\Core\Exceptions\BadRequest;

class Import extends \Fox\Core\Controllers\Record
{
    protected function checkControllerAccess()
    {
        if (!$this->getUser()->isAdmin()) {
            throw new Forbidden();
        }
    }

    public function actionPatch($params, $data)
    {
        throw new BadRequest();
    }

    public function actionUpdate($params, $data)
    {
        throw new BadRequest();
    }

    public function actionMassUpdate($params, $data, $request)
    {
        throw new BadRequest();
    }

    public function actionCreateLink($params, $data)
    {
        throw new BadRequest();
    }

    public function actionRemoveLink($params, $data)
    {
        throw new BadRequest();
    }

    protected function getFileManager()
    {
        return $this->getContainer()->get('fileManager');
    }

    protected function getEntityManager()
    {
        return $this->getContainer()->get('entityManager');
    }

    public function actionUploadFile($params, $data, $request)
    {
        $contents = $data;

        if (!$request->isPost()) {
            throw new BadRequest();
        }

        $attachment = $this->getEntityManager()->getEntity('Attachment');
        $attachment->set('type', 'text/csv');
        $attachment->set('role', 'Import File');
        $attachment->set('name', 'import-file.csv');
        $this->getEntityManager()->saveEntity($attachment);

        $this->getFileManager()->putContents('data/upload/' . $attachment->id, $contents);

        return array(
            'attachmentId' => $attachment->id
        );
    }

    public function actionRevert($params, $data, $request)
    {
        if (empty($data['id'])) {
            throw new BadRequest();
        }
        if (!$request->isPost()) {
            throw new BadRequest();
        }
        return $this->getService('Import')->revert($data['id']);
    }

    public function actionRemoveDuplicates($params, $data, $request)
    {
        if (empty($data['id'])) {
            throw new BadRequest();
        }
        if (!$request->isPost()) {
            throw new BadRequest();
        }
        return $this->getService('Import')->removeDuplicates($data['id']);
    }

    public function actionCreate($params, $data, $request)
    {
        if (!$request->isPost() && !$request->isPut()) {
            throw new BadRequest();
        }

        $importParams = array(
            'headerRow' => $data['headerRow'],
            'fieldDelimiter' => $data['fieldDelimiter'],
            'textQualifier' => $data['textQualifier'],
            'dateFormat' => $data['dateFormat'],
            'timeFormat' => $data['timeFormat'],
            'personNameFormat' => $data['personNameFormat'],
            'decimalMark' => $data['decimalMark'],
            'currency' => $data['currency'],
            'defaultValues' => $data['defaultValues'],
            'action' => $data['action'],
        );

        if (array_key_exists('updateBy', $data)) {
            $importParams['updateBy'] = $data['updateBy'];
        }

        $attachmentId = $data['attachmentId'];

        if (!$this->getAcl()->check($data['entityType'], 'edit')) {
            throw new Forbidden();
        }

        return $this->getService('Import')->import($data['entityType'], $data['fields'], $attachmentId, $importParams);
    }
}

