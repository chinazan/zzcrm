<?php
namespace Fox\Core\Upgrades\Actions\Base;

use Fox\Core\Exceptions\Error;
use Fox\Core\Utils\Util;
use Fox\Core\Utils\Json;

class Uninstall extends \Fox\Core\Upgrades\Actions\Base
{
    public function run($data)
    {
        $processId = $data['id'];

        $GLOBALS['log']->debug('Uninstallation process ['.$processId.']: start run.');

        if (empty($processId)) {
            throw new Error('Uninstallation package ID was not specified.');
        }

        $this->setProcessId($processId);

        $this->initialize();

        $this->checkIsWritable();

        $this->beforeRunAction();

        /* run before install script */
        if (!isset($data['isNotRunScriptBefore']) || !$data['isNotRunScriptBefore']) {
            $this->runScript('beforeUninstall');
        }

        $backupPath = $this->getPath('backupPath');
        if (file_exists($backupPath)) {

            /* copy core files */
            if (!$this->copyFiles()) {
                $this->throwErrorAndRemovePackage('Cannot copy files.');
            }

            /* remove extension files, saved in fileList */
            if (!$this->deleteFiles(true)) {
                $this->throwErrorAndRemovePackage('Permission denied to delete files.');
            }
        }

        if (!$this->systemRebuild()) {
            $this->throwErrorAndRemovePackage('Error occurred while FoxCRM rebuild.');
        }

        /* run after uninstall script */
        if (!isset($data['isNotRunScriptAfter']) || !$data['isNotRunScriptAfter']) {
            $this->runScript('afterUninstall');
        }

        $this->afterRunAction();

        $this->clearCache();

        /* delete backup files */
        $this->deletePackageFiles();

        $this->finalize();

        $GLOBALS['log']->debug('Uninstallation process ['.$processId.']: end run.');
    }

    protected function restoreFiles()
    {
        $packagePath = $this->getPath('packagePath');
        $filesPath = Util::concatPath($packagePath, self::FILES);

        if (!file_exists($filesPath)) {
            $this->unzipArchive($packagePath);
        }

        $res = $this->copy($filesPath, '', true);

        $manifestJson = $this->getFileManager()->getContents(array($packagePath, $this->manifestName));
        $manifest = Json::decode($manifestJson, true);
        if (!empty($manifest['delete'])) {
            $res &= $this->getFileManager()->remove($manifest['delete'], null, true);
        }

        $res &= $this->getFileManager()->removeInDir($packagePath, true);

        return $res;
    }

    protected function copyFiles()
    {
        $backupPath = $this->getPath('backupPath');
        $res = $this->copy(array($backupPath, self::FILES), '', true);

        return $res;
    }

    /**
     * Get backup path
     *
     * @param  string $processId
     * @return string
     */
    protected function getPackagePath($isPackage = false)
    {
        if ($isPackage) {
            return $this->getPath('packagePath', $isPackage);
        }

        return $this->getPath('backupPath');
    }

    protected function deletePackageFiles()
    {
        $backupPath = $this->getPath('backupPath');
        $res = $this->getFileManager()->removeInDir($backupPath, true);

        return $res;
    }

    protected function throwErrorAndRemovePackage($errorMessage = '')
    {
        $this->restoreFiles();
        throw new Error($errorMessage);
    }

    protected function getCopyFileList()
    {
        if (!isset($this->data['fileList'])) {
            $backupPath = $this->getPath('backupPath');
            $filesPath = Util::concatPath($backupPath, self::FILES);

            $this->data['fileList'] = $this->getFileManager()->getFileList($filesPath, true, '', true, true);
        }

        return $this->data['fileList'];
    }

    protected function getRestoreFileList()
    {
        if (!isset($this->data['restoreFileList'])) {
            $packagePath = $this->getPackagePath();
            $filesPath = Util::concatPath($packagePath, self::FILES);

            if (!file_exists($filesPath)) {
                $this->unzipArchive($packagePath);
            }

            $this->data['restoreFileList'] = $this->getFileManager()->getFileList($filesPath, true, '', true, true);
        }

        return $this->data['restoreFileList'];
    }

    protected function getDeleteFileList()
    {
        $packageFileList = $this->getRestoreFileList();
        $backupFileList = $this->getCopyFileList();

        $deleteFileList = array_diff($packageFileList, $backupFileList);

        return $deleteFileList;
    }
}
