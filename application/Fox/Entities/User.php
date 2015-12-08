<?php
namespace Fox\Entities;

class User extends \Fox\Core\Entities\Person
{
    public function isAdmin()
    {
        return $this->get('isAdmin');
    }

    public function isActive()
    {
        return $this->get('isActive');
    }
}
