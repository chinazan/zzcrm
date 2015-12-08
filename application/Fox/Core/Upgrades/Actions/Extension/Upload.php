<?php
namespace Fox\Core\Upgrades\Actions\Extension;

class Upload extends \Fox\Core\Upgrades\Actions\Base\Upload
{
    protected function checkDependencies($dependencyList)
    {
        return $this->getHelper()->checkDependencies($dependencyList);
    }
}