<?php
namespace Fox\Entities;

use Fox\Core\Exceptions\Error;

class EmailAddress extends \Fox\Core\ORM\Entity
{

    protected function _setName($value)
    {
        if (empty($value)) {
            throw new Error("Not valid email address '{$value}'");
        }
        $this->valuesContainer['name'] = $value;
        $this->set('lower', strtolower($value));        
    } 

}
