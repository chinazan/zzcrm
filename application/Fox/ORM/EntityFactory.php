<?php
namespace Fox\ORM;

class EntityFactory
{
    protected $metadata;

    protected $entityManager;

    public function __construct(EntityManager $entityManager, Metadata $metadata)
    {
        $this->entityManager = $entityManager;
        $this->metadata = $metadata;
    }
    public function create($name)
    {
        $className = $this->entityManager->normalizeEntityName($name);
        $defs = $this->metadata->get($name);
        if (!class_exists($className)) {
            return null;
        }
        $entity = new $className($defs, $this->entityManager);
        return $entity;
    }

}

