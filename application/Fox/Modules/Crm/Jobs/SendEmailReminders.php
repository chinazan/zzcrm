<?php
namespace Fox\Modules\Crm\Jobs;

use \Fox\Core\Exceptions;

class SendEmailReminders extends \Fox\Core\Jobs\Base
{
    const MAX_PORTION_SIZE = 10;

    public function run()
    {
        $dt = new \DateTime();

        $now = $dt->format('Y-m-d H:i:s');
        $nowShifted = $dt->sub(new \DateInterval('PT1H'))->format('Y-m-d H:i:s');

        $collection = $this->getEntityManager()->getRepository('Reminder')->where(array(
            'type' => 'Email',
            'remindAt<=' => $now,
            'startAt>' => $nowShifted,
        ))->find();

        if (!empty($collection)) {
            $emailReminder = new \Fox\Modules\Crm\Business\Reminder\EmailReminder(
                $this->getEntityManager(),
                $this->getContainer()->get('mailSender'),
                $this->getConfig(),
                $this->getContainer()->get('dateTime'),
                $this->getContainer()->get('language')
            );
            $pdo = $this->getEntityManager()->getPDO();
        }
        
        foreach ($collection as $i => $entity) {
            if ($i >= self::MAX_PORTION_SIZE) {
                break;
            }
            $emailReminder->send($entity);

            $sql = "DELETE FROM `reminder` WHERE id = ". $pdo->quote($entity->id);
            $pdo->query($sql);
            $this->getEntityManager()->removeEntity($entity);
        }
        return true;
    }
}

