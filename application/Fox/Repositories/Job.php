<?php
namespace Fox\Repositories;

use Fox\ORM\Entity;

class Job extends \Fox\Core\ORM\Repositories\RDB
{
    protected function init()
    {
        $this->dependencies[] = 'config';
    }

    protected function getConfig()
    {
        return $this->getInjection('config');
    }

    public function beforeSave(Entity $entity)
    {
        if (!$entity->has('executeTime')) {
            $entity->set('executeTime', date('Y-m-d H:i:s'));
        }

        if (!$entity->has('attempts')) {
            $attempts = $this->getConfig()->get('cron.attempts', 0);
            $entity->set('attempts', $attempts);
        }
    }
}

