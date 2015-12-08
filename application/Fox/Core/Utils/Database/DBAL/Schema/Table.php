<?php
namespace Fox\Core\Utils\Database\DBAL\Schema;

use Doctrine\DBAL\Types\Type;

class Table extends \Doctrine\DBAL\Schema\Table
{

    /**
     * @param string $columnName
     * @param string $typeName
     * @param array  $options
     *
     * @return \Doctrine\DBAL\Schema\Column
     */
    public function addColumn($columnName, $typeName, array $options=array())
    {
        $column = new Column($columnName, Type::getType($typeName), $options);

        $this->_addColumn($column);

        return $column;
    }

}