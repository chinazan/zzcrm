<?php
namespace Fox\Controllers;

use \Fox\Core\Exceptions\Forbidden;
use \Fox\Core\Exceptions\BadRequest;

class Attachment extends \Fox\Core\Controllers\Record
{

    public function actionUpload($params, $data, $request)
    {
        if (!$request->isPost()) {
            throw new BadRequest();
        }

        list($prefix, $contents) = explode(',', $data);
        $contents = base64_decode($contents);

        $attachment = $this->getEntityManager()->getEntity('Attachment');
        $this->getEntityManager()->saveEntity($attachment);
        $this->getContainer()->get('fileManager')->putContents('data/upload/' . $attachment->id, $contents);

        return array(
            'attachmentId' => $attachment->id
        );
    }

}

