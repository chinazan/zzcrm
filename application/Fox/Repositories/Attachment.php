<?php
namespace Fox\Repositories;

use Fox\ORM\Entity;

class Attachment extends \Fox\Core\ORM\Repositories\RDB
{
    protected function init()
    {
        $this->dependencies[] = 'fileManager';
    }

    protected function getFileManager()
    {
        return $this->getInjection('fileManager');
    }

    public function save(Entity $entity, array $options = array())
    {
        $isNew = $entity->isNew();
        $result = parent::save($entity, $options);

        if ($isNew) {
            if (!empty($entity->id) && $entity->has('contents')) {
                $contents = $entity->get('contents');
                $this->getFileManager()->putContents('data/upload/' . $entity->id, $contents);
            }
        }

        return $result;
    }

    protected function afterRemove(Entity $entity, array $options = array())
    {
        parent::afterRemove($entity, $options);
        $this->getFileManager()->removeFile('data/upload/' . $entity->id);
    }

}

