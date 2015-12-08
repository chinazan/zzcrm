<?php
namespace Fox\Core\Utils\Database\Orm\Relations;

class BelongsTo extends Base
{
    protected function load($linkName, $entityName)
    {
        $linkParams = $this->getLinkParams();

        $foreignEntityName = $this->getForeignEntityName();

        if (!empty($linkParams['noJoin'])) {
            $fieldNameDefs = array(
                'type' => 'varchar',
                'notStorable' => true,
                'relation' => $linkName,
                'foreign' => $this->getForeignField('name', $foreignEntityName),
            );
        } else {
            $fieldNameDefs = array(
                'type' => 'foreign',
                'relation' => $linkName,
                'foreign' => $this->getForeignField('name', $foreignEntityName),
                'notStorable' => false,
            );
        }

        return array (
            $entityName => array (
                'fields' => array(
                    $linkName.'Name' => $fieldNameDefs,
                    $linkName.'Id' => array(
                        'type' => 'foreignId',
                        'index' => true,
                    ),
                ),
                'relations' => array(
                    $linkName => array(
                        'type' => 'belongsTo',
                        'entity' => $foreignEntityName,
                        'key' => $linkName.'Id',
                        'foreignKey' => 'id',
                    ),
                ),
            ),
        );
    }

}