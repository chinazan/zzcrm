<?php
namespace Fox\Core\ORM;

class Entity extends \Fox\ORM\Entity
{

    public function loadLinkMultipleField($field, $columns = null)
    {
        if ($this->hasRelation($field) && $this->hasField($field . 'Ids')) {

            $defs = array();
            if (!empty($columns)) {
                $defs['additionalColumns'] = $columns;
            }

            $collection = $this->get($field, $defs);
            $ids = array();
            $names = new \stdClass();
            $types = new \stdClass();
            if (!empty($columns)) {
                $columnsData = new \stdClass();
            }

            if ($collection) {
                foreach ($collection as $e) {
                    $id = $e->id;
                    $ids[] = $id;
                    $names->$id = $e->get('name');
                    $types->$id = $e->get('type');
                    if (!empty($columns)) {
                        $columnsData->$id = new \stdClass();
                        foreach ($columns as $column => $f) {
                            $columnsData->$id->$column = $e->get($f);
                        }
                    }
                }
            }

            $this->set($field . 'Ids', $ids);
            $this->set($field . 'Names', $names);
            $this->set($field . 'Types', $types);
            if (!empty($columns)) {
                $this->set($field . 'Columns', $columnsData);
            }
        }
    }
}

