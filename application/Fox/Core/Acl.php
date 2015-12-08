<?php
namespace Fox\Core;

class Acl
{
    private $user;

    private $aclManager;

    public function __construct(AclManager $aclManager, \Fox\Entities\User $user)
    {
        $this->aclManager = $aclManager;
        $this->user = $user;
    }

    protected function getAclManager()
    {
        return $this->aclManager;
    }

    protected function getUser()
    {
        return $this->user;
    }

    public function getMap()
    {
        return $this->getAclManager()->getMap($this->getUser());
    }

    public function getLevel($scope, $action)
    {
        return $this->getAclManager()->getLevel($this->getUser(), $scope, $action);
    }

    public function get($permission)
    {
        return $this->getAclManager()->get($this->getUser(), $permission);
    }

    public function checkReadOnlyTeam($scope)
    {
        return $this->getAclManager()->checkReadOnlyTeam($this->getUser(), $scope);
    }

    public function checkReadOnlyOwn($scope)
    {
        return $this->getAclManager()->checkReadOnlyOwn($this->getUser(), $scope);
    }

    public function check($subject, $action = null, $isOwner = null, $inTeam = null)
    {
        return $this->getAclManager()->check($this->getUser(), $subject, $action, $isOwner, $inTeam) ;
    }

    public function checkScope($scope, $action = null, $isOwner = null, $inTeam = null, $entity = null)
    {
        return $this->getAclManager()->checkScope($this->getUser(), $scope, $action, $isOwner, $inTeam, $entity) ;
    }
}

