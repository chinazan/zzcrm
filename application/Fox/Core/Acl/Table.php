<?php
namespace Fox\Core\Acl;

use \Fox\Core\Exceptions\Error;

use \Fox\ORM\Entity;

class Table
{
    private $data = array(
        'table' => array()
    );

    private $cacheFile;

    private $actionList = ['read', 'edit', 'delete'];

    private $levelList = ['all', 'team', 'own', 'no'];

    protected $fileManager;

    protected $metadata;

    public function __construct(\Fox\Entities\User $user, $config = null, $fileManager = null, $metadata = null)
    {
        $this->user = $user;

        $this->metadata = $metadata;

        if (!$this->user->isFetched()) {
            throw new Error();
        }

        $this->user->loadLinkMultipleField('teams');

        if ($fileManager) {
            $this->fileManager = $fileManager;
        }

        $this->cacheFile = 'data/cache/application/acl/' . $user->id . '.php';

        if ($config && $config->get('useCache') && file_exists($this->cacheFile)) {
            $cached = include $this->cacheFile;
            $this->data = $cached;
            $this->initSolid();
        } else {
            $this->load();
            $this->initSolid();
            if ($config && $fileManager && $config->get('useCache')) {
                $this->buildCache();
            }
        }
    }

    public function getMap()
    {
        return $this->data;
    }

    public function getScopeData($scope)
    {
        if (array_key_exists($scope, $this->data['table'])) {
            $data = $this->data['table'][$scope];
            if (is_string($data)) {
                $data = $this->getScopeData($data);
                return $data;
            }
            return $data;
        }
        return null;
    }

    public function get($permission)
    {
        if ($permission == 'table') {
            return null;
        }

        if (array_key_exists($permission, $this->data)) {
            return $this->data[$permission];
        }
        return null;
    }

    public function getLevel($scope, $action)
    {
        if (array_key_exists($scope, $this->data['table'])) {
            if (array_key_exists($action, $this->data['table'][$scope])) {
                return $this->data['table'][$scope][$action];
            }
        }
        return false;
    }

    private function load()
    {
        $aclTables = [];
        $assignmentPermissionList = [];
        $userPermissionList = [];

        $userRoles = $this->user->get('roles');

        foreach ($userRoles as $role) {
            $aclTables[] = $role->get('data');
            $assignmentPermissionList[] = $role->get('assignmentPermission');
            $userPermissionList[] = $role->get('userPermission');
        }

        $teams = $this->user->get('teams');
        foreach ($teams as $team) {
            $teamRoles = $team->get('roles');
            foreach ($teamRoles as $role) {
                $aclTables[] = $role->get('data');
                $assignmentPermissionList[] = $role->get('assignmentPermission');
                $userPermissionList[] = $role->get('userPermission');
            }
        }

        $this->data['table'] = $this->merge($aclTables);

        $this->data['assignmentPermission'] = $this->mergeValues($assignmentPermissionList, $this->metadata->get('app.acl.valueDefaults.assignmentPermission', 'all'));
        $this->data['userPermission'] = $this->mergeValues($userPermissionList, $this->metadata->get('app.acl.valueDefaults.userPermission', 'no'));
    }

    private function initSolid()
    {
        if (!$this->metadata) {
            return;
        }

        $data = $this->metadata->get('app.acl.solid', array());

        foreach ($data as $entityType => $item) {
            $this->data['table'][$entityType] = $item;
        }
    }

    private function mergeValues(array $list, $defaultValue)
    {
        $result = null;
        foreach ($list as $level) {
            if ($level != 'not-set') {
                if (is_null($result)) {
                    $result = $level;
                    continue;
                }
                if (array_search($result, $this->levelList) > array_search($level, $this->levelList)) {
                    $result = $level;
                }
            }
        }
        if (is_null($result)) {
            $result = $defaultValue;
        }
        return $result;
    }

    private function getScopeList()
    {
        $scopeList = [];
        $scopes = $this->metadata->get('scopes');
        foreach ($scopes as $scope => $d) {
        	if (!empty($d['acl'])) {
        		$scopeList[] = $scope;
        	}
        }
        return $scopeList;
    }

    private function merge($tables)
    {
        $data = array();
        $scopeList = $this->getScopeList();

        foreach ($tables as $table) {
            foreach ($scopeList as $scope) {
            	if (!isset($table->$scope)) {
            		continue;
            	}
            	$row = $table->$scope;

                if ($row == false) {
                    if (!isset($data[$scope])) {
                        $data[$scope] = false;
                    }
                } else if ($row === true) {
                    $data[$scope] = true;
                } else {
                    if (!isset($data[$scope])) {
                        $data[$scope] = array();
                    }
                    if ($data[$scope] == false) {
                        $data[$scope] = array();
                    }

                    if (is_array($row) || $row instanceof \stdClass) {
                        foreach ($row as $action => $level) {
                            if (!isset($data[$scope][$action])) {
                                $data[$scope][$action] = $level;
                            } else {
                                if (array_search($data[$scope][$action], $this->levelList) > array_search($level, $this->levelList)) {
                                    $data[$scope][$action] = $level;
                                }
                            }
                        }
                    }
                }
            }
        }

        foreach ($scopeList as $scope) {
        	if (!array_key_exists($scope, $data)) {
        		$aclType = $this->metadata->get('scopes.' . $scope . '.acl');
                if ($aclType === true) {
                    $aclType = 'recordAllTeamOwnNo';
                }
        		if (!empty($aclType)) {
	        		$data[$scope] = $this->metadata->get('app.acl.defaults.' . $aclType, true);
        		}
        	}
        }
        return $data;
    }

    private function buildCache()
    {
        $contents = '<' . '?'. 'php return ' .  var_export($this->data, true)  . ';';
        $this->fileManager->putContents($this->cacheFile, $contents);
    }
}

