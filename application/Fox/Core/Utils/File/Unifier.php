<?php
namespace Fox\Core\Utils\File;

use Fox\Core\Utils;

class Unifier
{
    private $fileManager;
    private $metadata;

    protected $params = array(
        'unsetFileName' => 'unset.json',
        'defaultsPath' => 'application/Fox/Core/defaults',
    );

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
     * Unite file content to the file
     *
     * @param  string  $name
     * @param  array  $paths
     * @param  boolean $recursively Note: only for first level of sub directory, other levels of sub directories will be ignored
     *
     * @return array
     */
    public function unify($name, $paths, $recursively = false)
    {
        $content = $this->unifySingle($paths['corePath'], $name, $recursively);

        if (!empty($paths['modulePath'])) {
            $customDir = strstr($paths['modulePath'], '{*}', true);

            $moduleList = isset($this->metadata) ? $this->getMetadata()->getModuleList() : $this->getFileManager()->getFileList($customDir, false, '', false);

            foreach ($moduleList as $moduleName) {
                $curPath = str_replace('{*}', $moduleName, $paths['modulePath']);
                $content = Utils\Util::merge($content, $this->unifySingle($curPath, $name, $recursively, $moduleName));
            }
        }

        if (!empty($paths['customPath'])) {
            $content = Utils\Util::merge($content, $this->unifySingle($paths['customPath'], $name, $recursively));
        }

        return $content;
    }

    /**
     * Unite file content to the file for one directory [NOW ONLY FOR METADATA, NEED TO CHECK FOR LAYOUTS AND OTHERS]
     *
     * @param string $dirPath
     * @param string $type - name of type array("metadata", "layouts"), ex. $this->name
     * @param bool $recursively - Note: only for first level of sub directory, other levels of sub directories will be ignored
     * @param string $moduleName - name of module if exists
     *
     * @return string - content of the files
     */
    protected function unifySingle($dirPath, $type, $recursively = false, $moduleName = '')
    {
        if (empty($dirPath) || !file_exists($dirPath)) {
            return false;
        }
        $unsetFileName = $this->params['unsetFileName'];

        //get matadata files
        $fileList = $this->getFileManager()->getFileList($dirPath, $recursively, '\.json$');

        $dirName = $this->getFileManager()->getDirName($dirPath, false);
        $defaultValues = $this->loadDefaultValues($dirName, $type);

        $content = array();
        $unsets = array();
        foreach($fileList as $dirName => $fileName) {

            if (is_array($fileName)) {  /*get content from files in a sub directory*/
                $content[$dirName]= $this->unifySingle(Utils\Util::concatPath($dirPath,$dirName), $type, false, $moduleName); //only first level of a sub directory

            } else { /*get content from a single file*/
                if ($fileName == $unsetFileName) {
                    $fileContent = $this->getFileManager()->getContents(array($dirPath, $fileName));
                    $unsets = Utils\Json::getArrayData($fileContent);
                    continue;
                } /*END: Save data from unset.json*/

                $mergedValues = $this->unifyGetContents(array($dirPath, $fileName), $defaultValues);

                if (!empty($mergedValues)) {
                    $name = $this->getFileManager()->getFileName($fileName, '.json');
                    $content[$name] = $mergedValues;
                }
            }
        }

        //unset content
        $content = Utils\Util::unsetInArray($content, $unsets);
        //END: unset content

        return $content;
    }

    /**
     * Helpful method for get content from files for unite Files
     *
     * @param string | array $paths
     * @param string | array() $defaults - It can be a string like ["metadata","layouts"] OR an array with default values
     *
     * @return array
     */
    protected function unifyGetContents($paths, $defaults)
    {
        $fileContent = $this->getFileManager()->getContents($paths);

        $decoded = Utils\Json::getArrayData($fileContent, null);

        if (!isset($decoded)) {
            $GLOBALS['log']->emergency('Syntax error in '.Utils\Util::concatPath($paths));
            return array();
        }

        return $decoded;
    }

    /**
     * Load default values for selected type [metadata, layouts]
     *
     * @param string $name
     * @param string $type - [metadata, layouts]
     *
     * @return array
     */
    protected function loadDefaultValues($name, $type = 'metadata')
    {
        $defaultPath = $this->params['defaultsPath'];

        $defaultValue = $this->getFileManager()->getContents( array($defaultPath, $type, $name.'.json') );
        if ($defaultValue !== false) {
            //return default array
            return Utils\Json::decode($defaultValue, true);
        }

        return array();
    }

}

?>