<?php
namespace Fox\Services;

use \Fox\ORM\Entity;

class Role extends Record
{
    protected function init()
    {
        $this->dependencies[] = 'fileManager';
    }

    public function afterCreate(Entity $entity, array $data)
    {
        parent::afterCreate($entity, $data);
        $this->clearRolesCache();
    }

    public function afterUpdate(Entity $entity, array $data)
    {
        parent::afterUpdate($entity, $data);
        $this->clearRolesCache();
    }

    protected function clearRolesCache()
    {
        $this->getInjection('fileManager')->removeInDir('data/cache/application/acl');
    }
}

