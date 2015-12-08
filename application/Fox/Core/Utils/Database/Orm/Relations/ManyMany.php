<?php
namespace Fox\Core\Utils\Database\Orm\Relations;

use Fox\Core\Utils\Util;

class ManyMany extends Base
{
    protected function load($linkName, $entityName)
    {
        $foreignEntityName = $this->getForeignEntityName();

        return array(
            $entityName => array(
                'fields' => array(
                       $linkName.'Ids' => array(
                        'type' => 'varchar',
                        'notStorable' => true,
                    ),
                    $linkName.'Names' => array(
                        'type' => 'varchar',
                        'notStorable' => true,
                    ),
                ),
                'relations' => array(
                    $linkName => array(
                        'type' => 'manyMany',
                        'entity' => $foreignEntityName,
                        'relationName' => $this->getJoinTable($entityName, $foreignEntityName),
                        'key' => 'id', //todo specify 'key'
                        'foreignKey' => 'id', //todo specify 'foreignKey'
                        'midKeys' => array(
                            lcfirst($entityName).'Id',
                            lcfirst($foreignEntityName).'Id',
                        ),
                    ),
                ),
            ),
        );
    }

    protected function getJoinTable($tableName1, $tableName2)
    {
        $tables = $this->getSortEntities($tableName1, $tableName2);

        return Util::toCamelCase( implode('_', $tables) );
    }

    protected function getSortEntities($entity1, $entity2)
    {
        $entities = array(
            Util::toCamelCase(lcfirst($entity1)),
            Util::toCamelCase(lcfirst($entity2)),
        );

        sort($entities);

        return $entities;
    }

}