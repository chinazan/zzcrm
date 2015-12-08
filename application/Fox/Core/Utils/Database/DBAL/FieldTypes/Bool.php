<?php
namespace Fox\Core\Utils\Database\DBAL\FieldTypes;

use Doctrine\DBAL\Types\BooleanType;

class Bool extends BooleanType
{
    const BOOL = 'bool';

    public function getName()
    {
        return self::BOOL;
    }

    public static function getDbTypeName()
    {
        return 'TINYINT';
    }
}