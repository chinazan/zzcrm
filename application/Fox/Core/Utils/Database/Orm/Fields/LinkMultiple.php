<?php
namespace Fox\Core\Utils\Database\Orm\Fields;

class LinkMultiple extends Base
{
    protected function load($fieldName, $entityName)
    {
        $data = array(
            $entityName => array (
                'fields' => array(
                    $fieldName.'Ids' => array(
                        'type' => 'varchar',
                        'notStorable' => true,
                    ),
                    $fieldName.'Names' => array(
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

        $columns = $this->getMetadata()->get("entityDefs.{$entityName}.fields.{$fieldName}.columns");
        if (!empty($columns)) {
            $data[$entityName]['fields'][$fieldName . 'Columns'] = array(
                'type' => 'varchar',
                'notStorable' => true,
            );
        }

        return $data;
    }
}
