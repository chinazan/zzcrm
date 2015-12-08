<?php
namespace Fox\Core\Utils\Database\Orm\Fields;

class AttachmentMultiple extends Base
{
    protected function load($fieldName, $entityType)
    {
        $data = array(
            $entityType => array (
                'fields' => array(
                    $fieldName.'Ids' => array(
                        'type' => 'varchar',
                        'notStorable' => true
                    ),
                    $fieldName.'Names' => array(
                        'type' => 'varchar',
                        'notStorable' => true
                    ),
                )
            ),
            'unset' => array(
                $entityType => array(
                    'fields.'.$fieldName,
                ),
            ),
        );

        return $data;
    }
}
