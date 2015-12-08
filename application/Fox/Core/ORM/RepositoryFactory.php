<?php
namespace Fox\Core\ORM;

class RepositoryFactory extends \Fox\ORM\RepositoryFactory
{
    protected $defaultRepositoryClassName = '\\Fox\\Core\\ORM\\Repositories\\RDB';

    public function create($name)
    {
        $repository = parent::create($name);

        $dependencies = $repository->getDependencyList();
        foreach ($dependencies as $name) {
            $repository->inject($name, $this->entityManager->getContainer()->get($name));
        }
        return $repository;
    }
}

