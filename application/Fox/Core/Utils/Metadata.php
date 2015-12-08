<?php
namespace Fox\Core\Utils;

use Fox\Core\Exceptions\Error;

class Metadata
{
    protected $meta = null;

    private $config;
    private $unifier;
    private $fileManager;
    private $converter;
    private $moduleConfig;
    private $metadataHelper;

    /**
     * @var string - uses for loading default values
     */
    private $name = 'metadata';

    /**
     * Path to modules
     *
     * @var string
     */
    private $pathToModules = 'application/Fox/Modules';

    private $cacheFile = 'data/cache/application/metadata.php';

    private $paths = array(
        'corePath' => 'application/Fox/Resources/metadata',
        'modulePath' => 'application/Fox/Modules/{*}/Resources/metadata',
        'customPath' => 'custom/Fox/Custom/Resources/metadata',
    );

    protected $ormMeta = null;

    private $ormCacheFile = 'data/cache/application/ormMetadata.php';

    private $moduleList = null;

    /**
     * Default module order
     * @var integer
     */
    protected $defaultModuleOrder = 10;

    private $deletedData = array();

    private $changedData = array();

    public function __construct(\Fox\Core\Utils\Config $config, \Fox\Core\Utils\File\Manager $fileManager)
    {
        $this->config = $config;
        $this->fileManager = $fileManager;
    }

    protected function getConfig()
    {
        return $this->config;
    }

    protected function getFileManager()
    {
        return $this->fileManager;
    }

    protected function getUnifier()
    {
        if (!isset($this->unifier)) {
            $this->unifier = new \Fox\Core\Utils\File\Unifier($this->fileManager, $this);
        }

        return $this->unifier;
    }

    protected function getConverter()
    {
        if (!isset($this->converter)) {
            $this->converter = new \Fox\Core\Utils\Database\Converter($this, $this->fileManager);
        }

        return $this->converter;
    }

    protected function getModuleConfig()
    {
        if (!isset($this->moduleConfig)) {
            $this->moduleConfig = new \Fox\Core\Utils\Module($this->config, $this->fileManager);
        }

        return $this->moduleConfig;
    }

    protected function getMetadataHelper()
    {
        if (!isset($this->metadataHelper)) {
            $this->metadataHelper = new Metadata\Helper($this);
        }

        return $this->metadataHelper;
    }

    public function isCached()
    {
        if (!$this->getConfig()->get('useCache')) {
            return false;
        }

        if (file_exists($this->cacheFile)) {
            return true;
        }

        return false;
    }

    /**
     * Init metadata
     *
     * @param  boolean $reload
     * @return void
     */
    public function init($reload = false)
    {
        if (!$this->getConfig()->get('useCache')) {
            $reload = true;
        }

        if (file_exists($this->cacheFile) && !$reload) {
            $this->meta = $this->getFileManager()->getPhpContents($this->cacheFile);
        } else {
            $this->clearVars();
            $this->meta = $this->getUnifier()->unify($this->name, $this->paths, true);
            $this->meta = $this->setLanguageFromConfig($this->meta);
            $this->meta = $this->addAdditionalFields($this->meta);

            if ($this->getConfig()->get('useCache')) {
                $isSaved = $this->getFileManager()->putPhpContents($this->cacheFile, $this->meta);
                if ($isSaved === false) {
                    $GLOBALS['log']->emergency('Metadata:init() - metadata has not been saved to a cache file');
                }
            }
        }
    }

    /**
     * Get metadata array
     *
     * @return array
     */
    protected function getData()
    {
        if (empty($this->meta) || !is_array($this->meta)) {
            $this->init();
        }

        return $this->meta;
    }

    /**
    * Get Metadata
    *
    * @param string $key
    * @param mixed $default
    *
    * @return array
    */
    public function get($key = null, $default = null)
    {
        return Util::getValueByKey($this->getData(), $key, $default);
    }

    /**
    * Get All Metadata context
    *
    * @param $isJSON
    * @param bool $reload
    *
    * @return json | array
    */
    public function getAll($isJSON = false, $reload = false)
    {
        if ($reload) {
            $this->init(true);
        }

        if ($isJSON) {
            return Json::encode($this->meta);
        }
        return $this->meta;
    }

    /**
     * todo: move to a separate file
     * Set language list and default for Settings, Preferences metadata
     *
     * @param array $data Meta
     * @return array $data
     */
    protected function setLanguageFromConfig($data)
    {
        $entityList = array(
            'Settings',
            'Preferences',
        );

        $languageList = $this->getConfig()->get('languageList');
        $language = $this->getConfig()->get('language');

        foreach ($entityList as $entityName) {
            if (isset($data['entityDefs'][$entityName]['fields']['language'])) {
                $data['entityDefs'][$entityName]['fields']['language']['options'] = $languageList;
                $data['entityDefs'][$entityName]['fields']['language']['default'] = $language;
            }
        }

        return $data;
    }

    /**
     * todo: move to a separate file
     * Add additional fields defined from metadata -> fields
     *
     * @param array $meta
     */
    protected function addAdditionalFields(array $meta)
    {
        $metaCopy = $meta;
        $definitionList = $meta['fields'];

        foreach ($metaCopy['entityDefs'] as $entityName => $entityParams) {
            foreach ($entityParams['fields'] as $fieldName => $fieldParams) {

                $additionalFields = $this->getMetadataHelper()->getAdditionalFieldList($fieldName, $fieldParams, $definitionList);
                if (!empty($additionalFields)) {
                    //merge or add to the end of meta array
                    foreach ($additionalFields as $subFieldName => $subFieldParams) {
                        if (isset($entityParams['fields'][$subFieldName])) {
                            $meta['entityDefs'][$entityName]['fields'][$subFieldName] = Util::merge($subFieldParams, $entityParams['fields'][$subFieldName]);
                        } else {
                            $meta['entityDefs'][$entityName]['fields'][$subFieldName] = $subFieldParams;
                        }
                    }
                }
            }
        }

        return $meta;
    }

    /**
    * Set Metadata data
    * Ex. $key1 = menu, $key2 = Account then will be created a file metadataFolder/menu/Account.json
    *
    * @param  string $key1
    * @param  string $key2
    * @param JSON string $data
    *
    * @return bool
    */
    public function set($key1, $key2, $data)
    {
        $newData = array(
            $key1 => array(
                $key2 => $data,
            ),
        );

        $this->changedData = Util::merge($this->changedData, $newData);
        $this->meta = Util::merge($this->getData(), $newData);

        $this->undelete($key1, $key2, $data);
    }

    /**
     * Unset some fields and other stuff in metadat
     *
     * @param  string $key1
     * @param  string $key2
     * @param  array | string $unsets Ex. 'fields.name'
     *
     * @return bool
     */
    public function delete($key1, $key2, $unsets)
    {
        if (!is_array($unsets)) {
            $unsets = (array) $unsets;
        }

        $normalizedData = array(
            '__APPEND__',
        );
        $metaUnsetData = array();
        foreach ($unsets as $unsetItem) {
            $normalizedData[] = $unsetItem;
            $metaUnsetData[] = implode('.', array($key1, $key2, $unsetItem));
        }

        $unsetData = array(
            $key1 => array(
                $key2 => $normalizedData,
            ),
        );

        $this->deletedData = Util::merge($this->deletedData, $unsetData);
        $this->deletedData = Util::unsetInArrayByValue('__APPEND__', $this->deletedData);

        $this->meta = Util::unsetInArray($this->getData(), $metaUnsetData);
    }

    /**
     * Undelete the deleted items
     *
     * @param  string $key1
     * @param  string $key2
     * @param  array $data
     * @return void
     */
    protected function undelete($key1, $key2, $data)
    {
        if (isset($this->deletedData[$key1][$key2])) {
            foreach ($this->deletedData[$key1][$key2] as $unsetIndex => $unsetItem) {
                $value = Util::getValueByKey($data, $unsetItem);
                if (isset($value)) {
                    unset($this->deletedData[$key1][$key2][$unsetIndex]);
                }
            }
        }
    }

    /**
     * Clear unsaved changes
     *
     * @return void
     */
    public function clearChanges()
    {
        $this->changedData = array();
        $this->deletedData = array();
        $this->init(true);
    }

    /**
     * Save changes
     *
     * @return bool
     */
    public function save()
    {
        $path = $this->paths['customPath'];

        $result = true;
        if (!empty($this->changedData)) {
            foreach ($this->changedData as $key1 => $keyData) {
                foreach ($keyData as $key2 => $data) {
                    if (!empty($data)) {
                        $result &= $this->getFileManager()->mergeContents(array($path, $key1, $key2.'.json'), $data, true);
                    }
                }
            }
        }

        if (!empty($this->deletedData)) {
            foreach ($this->deletedData as $key1 => $keyData) {
                foreach ($keyData as $key2 => $unsetData) {
                    if (!empty($unsetData)) {
                        $rowResult = $this->getFileManager()->unsetContents(array($path, $key1, $key2.'.json'), $unsetData, true);
                        if ($rowResult == false) {
                            $GLOBALS['log']->warning('Metadata items ['.$key1.'.'.$key2.'] can be deleted for custom code only.');
                        }
                        $result &= $rowResult;
                    }
                }
            }
        }

        if ($result == false) {
            throw new Error("Error saving metadata. See log file for details.");
        }

        $this->clearChanges();

        return (bool) $result;
    }

    public function getOrmMetadata($reload = false)
    {
        if (!empty($this->ormMeta) && is_array($this->ormMeta) && !$reload) {
            return $this->ormMeta;
        }

        if (!file_exists($this->ormCacheFile) || !$this->getConfig()->get('useCache') || $reload) {
            $this->getConverter()->process();
        }

        if (empty($this->ormMeta)) {
            $this->ormMeta = $this->getFileManager()->getPhpContents($this->ormCacheFile);
        }

        return $this->ormMeta;
    }

    public function setOrmMetadata(array $ormMeta)
    {
        $result = true;

        if ($this->getConfig()->get('useCache')) {
            $result = $this->getFileManager()->putPhpContents($this->ormCacheFile, $ormMeta);
            if ($result == false) {
                throw new \Fox\Core\Exceptions\Error('Metadata::setOrmMetadata() - Cannot save ormMetadata to a file');
            }
        }

        $this->ormMeta = $ormMeta;

        return $result;
    }

    /**
     * Get Entity path, ex. Fox.Entities.Account or Modules\Crm\Entities\MyModule
     *
     * @param string $entityName
     * @param bool $delim - delimiter
     *
     * @return string
     */
    public function getEntityPath($entityName, $delim = '\\')
    {
        $path = $this->getScopePath($entityName, $delim);

        return implode($delim, array($path, 'Entities', Util::normilizeClassName(ucfirst($entityName))));
    }

    public function getRepositoryPath($entityName, $delim = '\\')
    {
        $path = $this->getScopePath($entityName, $delim);

        return implode($delim, array($path, 'Repositories', Util::normilizeClassName(ucfirst($entityName))));
    }

    /**
     * Load modules
     *
     * @return void
     */
    protected function loadModuleList()
    {
        $modules = $this->getFileManager()->getFileList($this->pathToModules, false, '', false);

        $modulesToSort = array();
        if (is_array($modules)) {
            foreach ($modules as $moduleName) {
                if (!empty($moduleName) && !isset($modulesToSort[$moduleName])) {
                    $modulesToSort[$moduleName] = $this->getModuleConfig()->get($moduleName . '.order', $this->defaultModuleOrder);
                }
            }
        }

        array_multisort(array_values($modulesToSort), SORT_ASC, array_keys($modulesToSort), SORT_ASC, $modulesToSort);

        $this->moduleList = array_keys($modulesToSort);
    }

    /**
     * Get Module List
     *
     * @return array
     */
    public function getModuleList()
    {
        if (!isset($this->moduleList)) {
            $this->loadModuleList();
        }

        return $this->moduleList;
    }

    /**
     * Get module name if it's a custom module or empty string for core entity
     *
     * @param string $scopeName
     *
     * @return string
     */
    public function getScopeModuleName($scopeName)
    {
        return $this->get('scopes.' . $scopeName . '.module', false);
    }

    /**
     * Get Scope path, ex. "Modules/Crm" for Account
     *
     * @param string $scopeName
     * @param string $delim - delimiter
     *
     * @return string
     */
    public function getScopePath($scopeName, $delim = '/')
    {
        $moduleName = $this->getScopeModuleName($scopeName);

        $path = ($moduleName !== false) ? 'Fox/Modules/'.$moduleName : 'Fox';

        if ($delim != '/') {
           $path = str_replace('/', $delim, $path);
        }

        return $path;
    }

    /**
     * Clear metadata variables when reload meta
     *
     * @return void
     */
    protected function clearVars()
    {
        $this->meta = null;
        $this->moduleList = null;
        $this->ormMeta = null;
    }
}
