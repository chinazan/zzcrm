<?php
namespace Fox\Core\Utils\File;

use Fox\Core\Utils\Util;
use Fox\Core\Utils\Json;

class FileUnifier
{
    private $fileManager;
    private $metadata;

    public function __construct(\Fox\Core\Utils\File\Manager $fileManager, \Fox\Core\Utils\Metadata $metadata = null)
    {
        $this->fileManager = $fileManager;
        $this->metadata = $metadata;
    }

    protected function getFileManager()
    {
        return $this->fileManager;
    }

    protected function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Unite files content
     *
     * @param array $paths
     * @param bool $isReturnModuleNames - If need to return data with module names
     *
     * @return array
     */
    public function unify(array $paths, $isReturnModuleNames = false)
    {
        $data = $this->loadData($paths['corePath']);

        if (!empty($paths['modulePath'])) {
            $moduleDir = strstr($paths['modulePath'], '{*}', true);
            $moduleList = isset($this->metadata) ? $this->getMetadata()->getModuleList() : $this->getFileManager()->getFileList($moduleDir, false, '', false);

            foreach ($moduleList as $moduleName) {
                $moduleFilePath = str_replace('{*}', $moduleName, $paths['modulePath']);

                if ($isReturnModuleNames) {
                    if (!isset($data[$moduleName])) {
                        $data[$moduleName] = array();
                    }
                    $data[$moduleName] = Util::merge($data[$moduleName], $this->loadData($moduleFilePath));
                    continue;
                }

                $data = Util::merge($data, $this->loadData($moduleFilePath));
            }
        }

        if (!empty($paths['customPath'])) {
            $data = Util::merge($data, $this->loadData($paths['customPath']));
        }

        return $data;
    }

    /**
     * Load data from a file
     *
     * @param  string $filePath
     * @param  array  $returns
     * @return array
     */
    protected function loadData($filePath, $returns = array())
    {
        if (file_exists($filePath)) {
            $content = $this->getFileManager()->getContents($filePath);
            $data = Json::getArrayData($content);
            if (empty($data)) {
                $GLOBALS['log']->warning('FileUnifier::unify() - Empty file or syntax error - ['.$filePath.']');
                return $returns;
            }

            return $data;
        }

        return $returns;
    }
}
