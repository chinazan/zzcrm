<?php
namespace Fox\Core\Utils\Database\Orm\Relations;

class EmailEmailAddress extends HasMany
{
    protected function load($linkName, $entityName)
    {
        $parentRelation = parent::load($linkName, $entityName);

        $foreignEntityName = $this->getForeignEntityName();

        $relation = array(
            $entityName => array (
                'relations' => array(
                    $linkName => array(
                        'midKeys' => array(
                            lcfirst($entityName).'Id',
                            lcfirst($foreignEntityName).'Id',
                        ),
                    ),
                ),
            ),
        );

        $relation = \Fox\Core\Utils\Util::merge($parentRelation, $relation);

        return $relation;
    }

}
