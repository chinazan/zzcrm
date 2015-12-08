<?php
namespace Fox\Modules\Crm\EntryPoints;

use \Fox\Core\Utils\Util;

use \Fox\Core\Exceptions\NotFound;
use \Fox\Core\Exceptions\Forbidden;
use \Fox\Core\Exceptions\BadRequest;
use \Fox\Core\Exceptions\Error;

class EventConfirmation extends \Fox\Core\EntryPoints\Base
{
    public static $authRequired = false;

    public function run()
    {
        $uid = $_GET['uid'];
        $action = $_GET['action'];
        if (empty($uid) || empty($action)) {
            throw new BadRequest();
        }

        if (!in_array($action, array('accept', 'decline', 'tentative'))) {
            throw new BadRequest();
        }

        $uniqueId = $this->getEntityManager()->getRepository('UniqueId')->where(array('name' => $uid))->findOne();

        if (!$uniqueId) {
            throw new NotFound();
            return;
        }

        $data = $uniqueId->get('data');

        $eventType = $data->eventType;
        $eventId = $data->eventId;
        $inviteeType = $data->inviteeType;
        $inviteeId = $data->inviteeId;
        $link = $data->link;

        if (!empty($eventType) && !empty($eventId) && !empty($inviteeType) && !empty($inviteeId) && !empty($link)) {
            $event = $this->getEntityManager()->getEntity($eventType, $eventId);
            $invitee = $this->getEntityManager()->getEntity($inviteeType, $inviteeId);
            if ($event && $invitee) {
                $relDefs = $event->getRelations();
                $tableName = Util::toUnderscore($relDefs[$link]['relationName']);

                $status = 'None';
                if ($action == 'accept') {
                    $status = 'Accepted';
                } else if ($action == 'decline') {
                    $status = 'Declined';
                } else if ($action == 'tentative') {
                    $status = 'Tentative';
                }

                $pdo = $this->getEntityManager()->getPDO();
                $sql = "
                    UPDATE `{$tableName}` SET status = '{$status}'
                    WHERE ".strtolower($eventType)."_id = '{$eventId}' AND ".strtolower($inviteeType)."_id = '{$inviteeId}'
                ";

                $sth = $pdo->prepare($sql);
                $sth->execute();

                $this->getEntityManager()->getRepository('UniqueId')->remove($uniqueId);

                echo $status;
                return;
            }
        }

        throw new Error();
    }
}

