<?php
namespace Fox\Core;

use \Fox\Core\Exceptions\Error;

use \Fox\Core\Utils\Util;

class SelectManagerFactory
{
    private $entityManager;

    private $user;

    private $acl;

    private $metadata;

    public function __construct($entityManager, \Fox\Entities\User $user, Acl $acl, $metadata)
    {
        $this->entityManager = $entityManager;
        $this->user = $user;
        $this->acl = $acl;
        $this->metadata = $metadata;
    }

    public function create($entityType)
    {
        $normalizedName = Util::normilizeClassName($entityType);

        $className = '\\Fox\\Custom\\SelectManagers\\' . $normalizedName;
        if (!class_exists($className)) {
            $moduleName = $this->metadata->getScopeModuleName($entityType);
            if ($moduleName) {
                $className = '\\Fox\\Modules\\' . $moduleName . '\\SelectManagers\\' . $normalizedName;
            } else {
                $className = '\\Fox\\SelectManagers\\' . $normalizedName;
            }
            if (!class_exists($className)) {
                $className = '\\Fox\\Core\\SelectManagers\\Base';
            }
        }

        $selectManager = new $className($this->entityManager, $this->user, $this->acl, $this->metadata);
        $selectManager->setEntityType($entityType);

        return $selectManager;
    }
}

