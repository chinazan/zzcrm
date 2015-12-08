<?php

namespace Fox\Custom\Services;

class Agent extends \Fox\Core\Templates\Services\Base
{
    protected function getDuplicateWhereClause(Entity $entity)
    {
        return array(
            'name' => $entity->get('name')
        );
    }
}
