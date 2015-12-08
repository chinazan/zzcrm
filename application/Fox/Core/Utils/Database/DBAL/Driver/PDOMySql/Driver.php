<?php
namespace Fox\Core\Utils\Database\DBAL\Driver\PDOMySql;

class Driver extends \Doctrine\DBAL\Driver\PDOMySql\Driver 
{

    public function getDatabasePlatform()
    {
        return new \Fox\Core\Utils\Database\DBAL\Platforms\MySqlPlatform();
    }
    
}