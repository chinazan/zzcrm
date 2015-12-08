<?php
namespace Fox\Core\Utils\Database\Orm\Relations;

class Attachments extends HasChildren
{
    protected function load($linkName, $entityName)
    {
        $parentRelation = parent::load($linkName, $entityName);

        $relation = array(
            $entityName => array (
                'fields' => array(
                    $linkName.'Types' => array(
                        'type' => 'jsonObject',
                        'notStorable' => true,
                    ),
                ),
            ),
        );

        $relation = \Fox\Core\Utils\Util::merge($parentRelation, $relation);

        return $relation;
    }
}

