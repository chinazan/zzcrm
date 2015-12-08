<?php
namespace Fox\Core\Utils\Database\Orm\Relations;

class EntityTeam extends Base
{
    protected function load($linkName, $entityName)
    {
        $linkParams = $this->getLinkParams();
        $foreignEntityName = $this->getForeignEntityName();

        return array(
            $entityName => array(
                'relations' => array(
                    $linkName => array(
                        'type' => 'manyMany',
                        'entity' => $foreignEntityName,
                        'relationName' => lcfirst($linkParams['relationName']),
                        'midKeys' => array(
                            'entity_id',
                            'team_id',
                        ),
                        'conditions' => array(
                            'entityType' => $entityName,
                        ),
                        'additionalColumns' => array(
                            'entityType' => array(
                                'type' => 'varchar',
                                'len' => 100,
                            ),
                        ),
                    ),
                ),
            ),
        );
    }

}