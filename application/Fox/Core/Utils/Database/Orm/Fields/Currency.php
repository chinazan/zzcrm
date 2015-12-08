<?php
namespace Fox\Core\Utils\Database\Orm\Fields;

use Fox\Core\Utils\Util;

class Currency extends Base
{
    protected function load($fieldName, $entityName)
    {
        $converedFieldName = $fieldName . 'Converted';

        $currencyColumnName = Util::toUnderScore($fieldName);

        $alias = Util::toUnderScore($fieldName) . "_currency_alias";

        $d = array(
            $entityName => array(
                'fields' => array(
                    $fieldName => array(
                        "type" => "float",
                        "orderBy" => $converedFieldName . " {direction}"
                    )
                ),
            ),
        );

        $params = $this->getFieldParams($fieldName);
        if (!empty($params['notStorable'])) {
            $d[$entityName]['fields'][$fieldName]['notStorable'] = true;
        } else {
            $d[$entityName]['fields'][$fieldName . 'Converted'] = array(
                'type' => 'float',
                'select' => Util::toUnderScore($entityName) . "." . $currencyColumnName . " * {$alias}.rate" ,
                'where' =>
                array (
                        "=" => Util::toUnderScore($entityName) . "." . $currencyColumnName . " * {$alias}.rate = {value}",
                        ">" => Util::toUnderScore($entityName) . "." . $currencyColumnName . " * {$alias}.rate > {value}",
                        "<" => Util::toUnderScore($entityName) . "." . $currencyColumnName . " * {$alias}.rate < {value}",
                        ">=" => Util::toUnderScore($entityName) . "." . $currencyColumnName . " * {$alias}.rate >= {value}",
                        "<=" => Util::toUnderScore($entityName) . "." . $currencyColumnName . " * {$alias}.rate <= {value}",
                        "<>" => Util::toUnderScore($entityName) . "." . $currencyColumnName . " * {$alias}.rate <> {value}"
                ),
                'notStorable' => true,
                'orderBy' => $converedFieldName . " {direction}"
            );
        }

        return $d;
    }
}
