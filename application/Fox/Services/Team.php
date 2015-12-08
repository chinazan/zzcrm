<?php
namespace Fox\Services;

class Team extends Record
{
    protected function init()
    {
        $this->addDependency('fileManager');
    }

    protected $linkSelectParams = array(
        'users' => array(
            'additionalColumns' => array(
                'role' => 'teamRole'
            )
        )
    );

    protected function getFileManager()
    {
        return $this->getInjection('fileManager');
    }

    public function afterUpdate(Entity $entity, array $data)
    {
        parent::afterUpdate($entity, $data);
        if (array_key_exists('rolesIds', $data)) {
            $this->clearRolesCache();
        }
    }

    protected function clearRolesCache($id)
    {
        $this->getFileManager()->removeInDir('data/cache/application/acl');
    }
}

