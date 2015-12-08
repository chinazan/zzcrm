<?php
namespace Fox\Modules\Crm\Controllers;

use \Fox\Core\Exceptions\BadRequest;
use \Fox\Core\Exceptions\Forbidden;
use \Fox\Core\Exceptions\NotFound;

class MassEmail extends \Fox\Core\Controllers\Record
{
    public function postActionSendTest($params, $data)
    {
        if (empty($data['id']) || empty($data['targetList']) || !is_array($data['targetList'])) {
            throw new BadRequest();
        }

        $id = $data['id'];

        $targetList = [];
        foreach ($data['targetList'] as $item) {
            if (empty($item->id) || empty($item->type)) continue;
            $targetId = $item->id;
            $targetType = $item->type;
            $target = $this->getEntityManager()->getEntity($targetType, $targetId);
            if (!$target) continue;
            if (!$this->getAcl()->check($target, 'read')) {
                continue;
            }
            $targetList[] = $target;
        }

        $massEmail = $this->getEntityManager()->getEntity('MassEmail', $id);
        if (!$massEmail) {
            throw new NotFound();
        }
        if (!$this->getAcl()->check($massEmail, 'read')) {
            throw new Forbidden();
        }

        $this->getRecordService()->createQueue($massEmail, true, $targetList);
        $this->getRecordService()->processSending($massEmail, true);
        return true;
    }
}
