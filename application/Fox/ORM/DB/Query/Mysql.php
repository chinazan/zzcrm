<?php
namespace Fox\ORM\DB\Query;

use Fox\ORM\Entity;
use Fox\ORM\IEntity;
use Fox\ORM\EntityFactory;
use PDO;

class Mysql extends Base
{
    public function limit($sql, $offset, $limit)
    {
        if (!is_null($offset) && !is_null($limit)) {
            $offset = intval($offset);
            $limit = intval($limit);
            $sql .= " LIMIT {$offset}, {$limit}";
        }
        return $sql;
    }
}
