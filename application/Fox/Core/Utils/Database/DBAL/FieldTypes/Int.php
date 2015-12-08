<?php
namespace Fox\Core\Utils\Database\DBAL\FieldTypes;

use Doctrine\DBAL\Types\IntegerType;

class Int extends IntegerType
{
    const INTtype = 'int';

    public function getName()
    {
        return self::INTtype;
    }
}