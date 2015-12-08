<?php
namespace Fox\Entities;

use Fox\Core\Exceptions\Error;

class PhoneNumber extends \Fox\Core\ORM\Entity
{
    protected function _setName($value)
    {
        if (empty($value)) {
            throw new Error("Phone number can't be empty");
        }
        $this->valuesContainer['name'] = $value;    
    }
}

