<?php
namespace Fox\Core;

use \Fox\Core\Utils\Util;
use \Fox\Core\Exceptions\NotFound;

class ControllerManager
{
    private $config;

    private $metadata;

    private $container;

    public function __construct(\Fox\Core\Container $container)
    {
        $this->container = $container;

        $this->config = $this->container->get('config');
        $this->metadata = $this->container->get('metadata');
    }

    protected function getConfig()
    {
        return $this->config;
    }

    protected function getMetadata()
    {
        return $this->metadata;
    }

    public function process($controllerName, $actionName, $params, $data, $request)
    {
        $customeClassName = '\\Fox\\Custom\\Controllers\\' . Util::normilizeClassName($controllerName);
        if (class_exists($customeClassName)) {
            $controllerClassName = $customeClassName;
        } else {
            $moduleName = $this->metadata->getScopeModuleName($controllerName);
            if ($moduleName) {
                $controllerClassName = '\\Fox\\Modules\\' . $moduleName . '\\Controllers\\' . Util::normilizeClassName($controllerName);
            } else {
                $controllerClassName = '\\Fox\\Controllers\\' . Util::normilizeClassName($controllerName);
            }
        }

        if ($data && stristr($request->getContentType(), 'application/json')) {
            $data = json_decode($data);
        }


        if ($data instanceof \stdClass) {
            $data = get_object_vars($data);
        }

        if (!class_exists($controllerClassName)) {
            throw new NotFound("Controller '$controllerName' is not found");
        }

        $controller = new $controllerClassName($this->container, $request->getMethod());

        if ($actionName == 'index') {
            $actionName = $controllerClassName::$defaultAction;
        }

        $actionNameUcfirst = ucfirst($actionName);

        $beforeMethodName = 'before' . $actionNameUcfirst;
        $actionMethodName = 'action' . $actionNameUcfirst;
        $afterMethodName = 'after' . $actionNameUcfirst;

        $fullActionMethodName = strtolower($request->getMethod()) . ucfirst($actionMethodName);

        if (method_exists($controller, $fullActionMethodName)) {
            $primaryActionMethodName = $fullActionMethodName;
        } else {
            $primaryActionMethodName = $actionMethodName;
        }

        if (!method_exists($controller, $primaryActionMethodName)) {
            throw new NotFound("Action '$actionName' (".$request->getMethod().") does not exist in controller '$controllerName'");
        }

        if (method_exists($controller, $beforeMethodName)) {
            $controller->$beforeMethodName($params, $data, $request);
        }

        $result = $controller->$primaryActionMethodName($params, $data, $request);

        if (method_exists($controller, $afterMethodName)) {
            $controller->$afterMethodName($params, $data, $request);
        }

        if (is_array($result) || is_bool($result)) {
            return \Fox\Core\Utils\Json::encode($result);
        }

        return $result;
    }

}

