<?php
namespace Fox\Core\Loaders;

class EntityManagerUtil extends Base
{
    public function load()
    {
        $entityManager = new \Fox\Core\Utils\EntityManager(
            $this->getContainer()->get('metadata'),
            $this->getContainer()->get('language'),
            $this->getContainer()->get('fileManager')
        );

        return $entityManager;
    }
}

