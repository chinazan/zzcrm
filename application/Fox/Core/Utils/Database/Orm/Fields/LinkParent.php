<?php
namespace Fox\Core\Utils\Database\Orm\Fields;

class LinkParent extends Base
{
    protected function load($fieldName, $entityName)
    {
        return array(
            $entityName => array (
                'fields' => array(
                    $fieldName.'Id' => array(
                        'type' => 'foreignId',
                        'index' => $fieldName,
                    ),
                    $fieldName.'Type' => array(
                        'type' => 'foreignType',
                        'notNull' => false,
                        'index' => $fieldName,
                    ),
                    $fieldName.'Name' => array(
                        'type' => 'varchar',
                        'notStorable' => true,
                    ),
                ),
            ),
            'unset' => array(
                $entityName => array(
                    'fields.'.$fieldName,
                ),
            ),
        );
    }
}