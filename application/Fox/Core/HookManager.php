<?php
namespace Fox\Core;

use \Fox\Core\Exceptions\Error,
    \Fox\Core\Utils\Util;

class HookManager
{
    private $container;

    private $data;

    private $hooks;

    protected $cacheFile = 'data/cache/application/hooks.php';

    /**
     * List of defined hooks
     *
     * @var array
     */
    protected $hookList = array(
        'beforeSave',
        'afterSave',
        'beforeRemove',
        'afterRemove',
    );

    protected $paths = array(
        'corePath' => 'application/Fox/Hooks',
        'modulePath' => 'application/Fox/Modules/{*}/Hooks',
        'customPath' => 'custom/Fox/Custom/Hooks',
    );


    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->loadHooks();
    }

    protected function getConfig()
    {
        return $this->container->get('config');
    }

    protected function getFileManager()
    {
        return $this->container->get('fileManager');
    }

    protected function loadHooks()
    {
        if ($this->getConfig()->get('useCache') && file_exists($this->cacheFile)) {
            $this->data = $this->getFileManager()->getPhpContents($this->cacheFile);
            return;
        }

        $metadata = $this->container->get('metadata');

        $this->data = $this->getHookData($this->paths['corePath']);

        foreach ($metadata->getModuleList() as $moduleName) {
            $modulePath = str_replace('{*}', $moduleName, $this->paths['modulePath']);
            $this->data = array_merge_recursive($this->data, $this->getHookData($modulePath));
        }

        $this->data = array_merge_recursive($this->data, $this->getHookData($this->paths['customPath']));

        if ($this->getConfig()->get('useCache')) {
            $this->getFileManager()->putPhpContents($this->cacheFile, $this->data);
        }
    }

    public function process($scope, $hookName, $injection = null, array $options = array())
    {
        if ($scope != 'Common') {
            $this->process('Common', $hookName, $injection, $options);
        }

        if (!empty($this->data[$scope])) {
            if (!empty($this->data[$scope][$hookName])) {
                foreach ($this->data[$scope][$hookName] as $className) {
                    if (empty($this->hooks[$className])) {
                        $this->hooks[$className] = $this->createHookByClassName($className);
                        if (empty($this->hooks[$className])) {
                            continue;
                        }
                    }
                    $hook = $this->hooks[$className];
                    $hook->$hookName($injection, $options);
                }
            }
        }
    }

    public function createHookByClassName($className)
    {
        if (class_exists($className)) {
            $hook = new $className();
            $dependencies = $hook->getDependencyList();
            foreach ($dependencies as $name) {
                $hook->inject($name, $this->container->get($name));
            }
            return $hook;
        }
        $GLOBALS['log']->error("Hook class '{$name}' does not exist.");
    }

    /**
     * Get and merge hook data by checking the files exist in $hookDirs
     *
     * @param array $hookDirs - it can be an array('Fox/Hooks', 'Fox/Custom/Hooks', 'Fox/Modules/Crm/Hooks')
     *
     * @return array
     */
    protected function getHookData($hookDirs)
    {
        if (is_string($hookDirs)) {
            $hookDirs = (array) $hookDirs;
        }

        $hooks = array();

        foreach ($hookDirs as $hookDir) {

            if (file_exists($hookDir)) {
                $fileList = $this->getFileManager()->getFileList($hookDir, 1, '\.php$', true);

                foreach ($fileList as $scopeName => $hookFiles) {

                    $hookScopeDirPath = Util::concatPath($hookDir, $scopeName);

                    $scopeHooks = array();
                    foreach($hookFiles as $hookFile) {
                        $hookFilePath = Util::concatPath($hookScopeDirPath, $hookFile);
                        $className = Util::getClassName($hookFilePath);

                        foreach($this->hookList as $hookName) {
                            if (method_exists($className, $hookName)) {
                                $scopeHooks[$hookName][$className::$order][] = $className;
                            }
                        }
                    }

                    //sort hooks by order
                    foreach ($scopeHooks as $hookName => $hookList) {
                        ksort($hookList);

                        $sortedHookList = array();
                        foreach($hookList as $hookDetails) {
                            $sortedHookList = array_merge($sortedHookList, $hookDetails);
                        }

                        $normalizedScopeName = Util::normilizeScopeName($scopeName);

                        $hooks[$normalizedScopeName][$hookName] = isset($hooks[$normalizedScopeName][$hookName]) ? array_merge($hooks[$normalizedScopeName][$hookName], $sortedHookList) : $sortedHookList;
                    }
                }
            }

        }

        return $hooks;
    }

}

