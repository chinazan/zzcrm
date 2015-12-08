<?php
namespace Fox\Modules\Crm\SelectManagers;

class Task extends \Fox\Core\SelectManagers\Base
{
    protected function boolFilterActual(&$result)
    {
        $this->filterActual($result);
    }

    protected function boolFilterCompleted(&$result)
    {
        $this->filterCompleted($result);
    }

    protected function filterActual(&$result)
    {
        $result['whereClause'][] = array(
            'status!=' => ['Completed', 'Canceled']
        );
    }

    protected function filterActualNotDeferred(&$result)
    {
        $result['whereClause'][] = array(
            'status!=' => ['Completed', 'Canceled', 'Deferred']
        );
    }

    protected function filterCompleted(&$result)
    {
        $result['whereClause'][] = array(
            'status' => ['Completed']
        );
    }

    protected function filterOverdue(&$result)
    {
        $result['whereClause'][] = [
            $this->convertDateTimeWhere(array(
                'type' => 'past',
                'field' => 'dateEnd',
                'timeZone' => $this->getUserTimeZone()
            )),
            [
                array(
                    'status!=' => ['Completed', 'Canceled']
                )
            ]
        ];
    }

    protected function convertDateTimeWhere($item)
    {
        $result = parent::convertDateTimeWhere($item);

        if (empty($result)) {
            return null;
        }
        $field = $item['field'];

        if ($field != 'dateStart' && $field != 'dateEnd') {
            return $result;
        }

        $fieldDate = $field . 'Date';

        $dateItem = array(
            'field' => $fieldDate,
            'type' => $item['type']
        );
        if (!empty($item['value'])) {
            $dateItem['value'] = $item['value'];
        }

        $result = array(
            'OR' => array(
                'AND' => [
                    $result,
                    $fieldDate . '=' => null
                ],
                $this->getWherePart($dateItem)
            )
        );

        return $result;
    }
}

