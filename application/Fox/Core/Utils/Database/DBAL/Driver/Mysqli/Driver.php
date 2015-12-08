<?php
namespace Fox\Core\Utils\Database\DBAL\Driver\Mysqli;

class Driver extends \Doctrine\DBAL\Driver\Mysqli\Driver 
{

    public function getDatabasePlatform()
    {
        return new \Fox\Core\Utils\Database\DBAL\Platforms\MySqlPlatform();
    }
    
}