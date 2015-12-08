<?php
namespace Fox\Core\Utils;

class Module
{
    private $fileManager;

    private $config;

    private $unifier;

    protected $data = null;

    protected $cacheFile = 'data/cache/application/modules.php';

    protected $paths = array(
        'corePath' => 'application/Fox/Resources/module.json',
        'modulePath' => 'application/Fox/Modules/{*}/Resources/module.json',
        'customPath' => 'custom/Fox/Custom/Resources/module.json',
    );

    public function __construct(Config $config, File\Manager $fileManager)
    {
        $this->config = $config;
        $this->fileManager = $fileManager;

        $this->unifier = new \Fox\Core\Utils\File\FileUnifier($this->fileManager);
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
        return $this->unifier;
    }

    public function get($key = '', $returns = null)
    {
        if (!isset($this->data)) {
            $this->init();
        }

        if (empty($key)) {
            return $this->data;
        }

        return Util::getValueByKey($this->data, $key, $returns);
    }

    public function getAll()
    {
        return $this->get();
    }

    protected function init()
    {
        if (file_exists($this->cacheFile) && $this->getConfig()->get('useCache')) {
            $this->data = $this->getFileManager()->getPhpContents($this->cacheFile);
        } else {
            $this->data = $this->getUnifier()->unify($this->paths, true);

            if ($this->getConfig()->get('useCache')) {
                $result = $this->getFileManager()->putPhpContents($this->cacheFile, $this->data);
                if ($result == false) {
                    throw new \Fox\Core\Exceptions\Error('Module - Cannot save unified modules.');
                }
            }
        }
    }
}