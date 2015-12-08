<?php
namespace Fox\Modules\Crm\Controllers;

use \Fox\Core\Exceptions\Error;
use \Fox\Core\Exceptions\Forbidden;
use \Fox\Core\Exceptions\BadRequest;

class TargetList extends \Fox\Core\Controllers\Record
{
	public function actionUnlinkAll($params, $data, $request)
	{
		if (!$request->isPost()) {
			throw new BadRequest();
		}

		if (empty($data['id'])) {
			throw new BadRequest();
		}

		if (empty($data['link'])) {
			throw new BadRequest();
		}

		return $this->getRecordService()->unlinkAll($data['id'], $data['link']);
	}

	public function postActionCancelOptOut($params, $data)
	{
		if (empty($data['id'])) {
			throw new BadRequest();
		}
		if (empty($data['targetType'])) {
			throw new BadRequest();
		}
		if (empty($data['targetId'])) {
			throw new BadRequest();
		}
		return $this->getRecordService()->cancelOptOut($data['id'], $data['targetType'], $data['targetId']);
	}

}
