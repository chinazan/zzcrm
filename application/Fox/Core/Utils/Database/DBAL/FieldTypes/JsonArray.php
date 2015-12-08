<?php
namespace Fox\Core\Utils\Database\DBAL\FieldTypes;

class JsonArray extends \Doctrine\DBAL\Types\JsonArrayType
{
    const JSON_ARRAY = 'jsonArray';

    public function getName()
    {
        return self::JSON_ARRAY;
    }

    public static function getDbTypeName()
    {
        return 'TEXT';
    }

}
