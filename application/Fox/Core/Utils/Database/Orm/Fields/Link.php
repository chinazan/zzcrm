<?php
namespace Fox\Core\Utils\Database\Orm\Fields;

class Link extends Base
{
    protected function load($fieldName, $entityName)
    {
        $fieldParams = $this->getFieldParams();

        $data = array(
            $entityName => array (
                'fields' => array(
                    $fieldName.'Id' => array(
                        'type' => 'foreignId',
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
        if (!empty($fieldParams['notStorable'])) {
            $data[$entityName]['fields'][$fieldName.'Id']['notStorable'] = true;
        }


        return $data;
    }
}