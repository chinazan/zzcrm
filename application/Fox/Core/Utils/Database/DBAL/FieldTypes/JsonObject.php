<?php
namespace Fox\Core\Utils\Database\DBAL\FieldTypes;

class JsonObject extends \Doctrine\DBAL\Types\ObjectType
{
    const JSON_OBJECT = 'jsonObject';

    public function getName()
    {
        return self::JSON_OBJECT;
    }

    public static function getDbTypeName()
    {
        return 'TEXT';
    }

}
