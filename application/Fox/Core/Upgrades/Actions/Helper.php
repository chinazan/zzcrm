<?php
namespace Fox\Core\Upgrades\Actions;

use Fox\Core\Exceptions\Error;

class Helper
{
    private $actionObject;

    public function __construct($actionObject = null)
    {
        if (isset($actionObject)) {
            $this->setActionObject($actionObject);
        }
    }

    public function setActionObject(\Fox\Core\Upgrades\Actions\Base $actionObject)
    {
        $this->actionObject = $actionObject;
    }

    protected function getActionObject()
    {
        return $this->actionObject;
    }

    /**
     * Check dependencies
     *
     * @param  array | string $dependencyList
     *
     * @return bool
     */
    public function checkDependencies($dependencyList)
    {
        if (!is_array($dependencyList)) {
            $dependencyList = (array) $dependencyList;
        }

        $actionObject = $this->getActionObject();

        foreach ($dependencyList as $extensionName => $extensionVersion) {
            $dependencyExtensionEntity = $actionObject->getEntityManager()->getRepository('Extension')->where(array(
                'name' => trim($extensionName),
                'isInstalled' => true,
            ))->findOne();

            $errorMessage = 'Dependency Error: The extension "'.$extensionName.'" with version "'.$extensionVersion.'" is missing.';
            if (!isset($dependencyExtensionEntity) || !$actionObject->checkVersions($extensionVersion, $dependencyExtensionEntity->get('version'), $errorMessage)) {
                throw new Error($errorMessage);
            }
        }

        return true;
    }
}
