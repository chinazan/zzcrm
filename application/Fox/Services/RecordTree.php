<?php
namespace Fox\Services;

use \Fox\ORM\Entity;

use \Fox\Core\Exceptions\Error;
use \Fox\Core\Exceptions\Forbidden;
use \Fox\Core\Exceptions\BadRequest;
use \Fox\Core\Exceptions\NotFound;

class RecordTree extends Record
{
    const MAX_DEPTH = 2;

    private $seed = null;

    public function getTree($parentId = null, $params = array(), $level = 0, $maxDepth = null)
    {
        if (!$maxDepth) {
            $maxDepth = self::MAX_DEPTH;
        }

        if ($level == self::MAX_DEPTH) {
            return null;
        }

        $selectParams = $this->getSelectParams($params);
        $selectParams['whereClause'][] = array(
            'parentId' => $parentId
        );

        if ($this->hasOrder()) {
            $selectParams['orderBy'] = [
                ['order', 'asc'],
                ['name', 'asc']
            ];
        } else {
            $selectParams['orderBy'] = [
                ['name', 'asc']
            ];
        }

        $collection = $this->getRepository()->find($selectParams);
        foreach ($collection as $entity) {
            $childList = $this->getTree($entity->id, $params, $level + 1);
            $entity->set('childList', $childList);
        }
        return $collection;
    }

    public function getTreeItemPath($parentId = null)
    {
        $arr = [];
        while (1) {
            if (empty($parentId)) {
                break;
            }
            $parent = $this->getEntityManager()->getEntity($this->entityType, $parentId);
            if ($parent) {
                $parentId = $parent->get('parentId');
                array_unshift($arr, $parent->id);
            } else {
                $parentId = null;
            }
        }
        return $arr;
    }

    protected function getSeed()
    {
        if (empty($this->seed)) {
            $this->seed = $this->getEntityManager()->getEntity($this->getEntityType());
        }
        return $this->seed;
    }

    protected function hasOrder()
    {
        $seed = $this->getSeed();
        if ($seed->hasField('order')) {
            return true;
        }
        return false;
    }

    protected function beforeCreate(Entity $entity, array $data = array())
    {
        parent::beforeCreate($entity, $data);
        if (!empty($data['parentId'])) {
            $parent = $this->getEntityManager()->getEntity($this->getEntityType(), $data['parentId']);
            if (!$parent) {
                throw new Error("Tried to create tree item entity with not existing parent.");
            }
            if (!$this->getAcl()->check($parent, 'edit')) {
                throw new Forbidden();
            }
        }
    }

    public function updateEntity($id, $data)
    {
        if (!empty($data['parentId']) && $data['parentId'] == $id) {
            throw new Forbidden();
        }

        return parent::updateEntity($id, $data);
    }

    public function linkEntity($id, $link, $foreignId)
    {
        if ($id == $foreignId ) {
            throw new Forbidden();
        }
        return parent::linkEntity($id, $link, $foreignId);
    }
}

