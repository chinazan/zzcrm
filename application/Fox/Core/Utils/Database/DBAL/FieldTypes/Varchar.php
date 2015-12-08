<?php
namespace Fox\Core\Utils\Database\DBAL\FieldTypes;

use Doctrine\DBAL\Types\StringType;

class Varchar extends StringType
{
    const VARCHAR = 'varchar';

    public function getName()
    {
        return self::VARCHAR;
    }
}