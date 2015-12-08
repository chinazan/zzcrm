<?php
namespace Fox\Core\Upgrades\Actions\Extension;

use Fox\Core\Exceptions\Error;

class Delete extends \Fox\Core\Upgrades\Actions\Base\Delete
{
    protected $extensionEntity;

    /**
     * Get entity of this extension
     *
     * @return \Fox\Entities\Extension
     */
    protected function getExtensionEntity()
    {
        if (!isset($this->extensionEntity)) {
            $processId = $this->getProcessId();
            $this->extensionEntity = $this->getEntityManager()->getEntity('Extension', $processId);
            if (!isset($this->extensionEntity)) {
                throw new Error('Extension Entity not found.');
            }
        }

        return $this->extensionEntity;
    }

    protected function afterRunAction()
    {
        /** Delete extension entity */
        $extensionEntity = $this->getExtensionEntity();
        $this->getEntityManager()->removeEntity($extensionEntity);
    }
}