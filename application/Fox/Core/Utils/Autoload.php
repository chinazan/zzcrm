<?php
namespace Fox\Core\Utils;

class Autoload
{
    protected $data = null;

    private $fileManager;
    private $config;
    private $metadata;

    protected $cacheFile = 'data/cache/application/autoload.php';

    protected $paths = array(
        'corePath' => 'application/Fox/Resources/autoload.json',
        'modulePath' => 'application/Fox/Modules/{*}/Resources/autoload.json',
        'customPath' => 'custom/Fox/Custom/Resources/autoload.json',
    );

    public function __construct(Config $config, Metadata $metadata, File\Manager $fileManager)
    {
        $this->config = $config;
        $this->metadata = $metadata;
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

    protected function getMetadata()
    {
        return $this->metadata;
    }

    public function get($key = null, $returns = null)
    {
        if (!isset($this->data)) {
            $this->init();
        }

        if (!isset($key)) {
            return $this->data;
        }

        return Utill::getValueByKey($this->data, $key, $returns);
    }


    public function getAll()
    {
        return $this->get();
    }

    protected function init()
    {
        if (file_exists($this->cacheFile) && $this->getConfig()->get('useCache')) {
            $this->data = $this->getFileManager()->getPhpContents($this->cacheFile);
            return;
        }

        $this->data = $this->unify();

        if ($this->getConfig()->get('useCache')) {
            $result = $this->getFileManager()->putPhpContents($this->cacheFile, $this->data);
            if ($result == false) {
                 throw new \Fox\Core\Exceptions\Error('Autoload: Cannot save unified autoload.');
            }
        }
    }

    protected function unify()
    {
        $data = $this->loadData($this->paths['corePath']);

        foreach ($this->getMetadata()->getModuleList() as $moduleName) {
            $modulePath = str_replace('{*}', $moduleName, $this->paths['modulePath']);
            $data = array_merge($data, $this->loadData($modulePath));
        }

        $data = array_merge($data, $this->loadData($this->paths['customPath']));

        return $data;
    }

    protected function loadData($autoloadFile, $returns = array())
    {
        if (file_exists($autoloadFile)) {
            $content= $this->getFileManager()->getContents($autoloadFile);
            $arrayContent = Json::getArrayData($content);
            if (!empty($arrayContent)) {
                return $arrayContent;
            }

            $GLOBALS['log']->error('Autoload::unify() - Empty file or syntax error - ['.$autoloadFile.']');
        }

        return $returns;
    }
}