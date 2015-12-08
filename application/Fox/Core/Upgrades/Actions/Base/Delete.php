<?php
namespace Fox\Core\Upgrades\Actions\Base;

class Delete extends \Fox\Core\Upgrades\Actions\Base
{
    public function run($data)
    {
        $processId = $data['id'];

        $GLOBALS['log']->debug('Delete package process ['.$processId.']: start run.');

        if (empty($processId)) {
            throw new Error('Delete package package ID was not specified.');
        }

        $this->initialize();

        $this->setProcessId($processId);

        $this->beforeRunAction();

        /* delete a package */
        $this->deletePackage();

        $this->afterRunAction();

        $this->finalize();

        $GLOBALS['log']->debug('Delete package process ['.$processId.']: end run.');
    }

    protected function deletePackage()
    {
        $packageArchivePath = $this->getPackagePath(true);
        $res = $this->getFileManager()->removeFile($packageArchivePath);

        return $res;
    }

}