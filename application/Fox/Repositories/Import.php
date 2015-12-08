<?php
namespace Fox\Repositories;

use Fox\ORM\Entity;

class Import extends \Fox\Core\ORM\Repositories\RDB
{
    public function findRelated(Entity $entity, $link, $selectParams = array())
    {
        $entityType = $entity->get('entityType');

        $selectParams['customJoin'] .= $this->getRelatedJoin($entity, $link);

        return $this->getEntityManager()->getRepository($entityType)->find($selectParams);
    }

    protected function getRelatedJoin(Entity $entity, $link)
    {
        $entityType = $entity->get('entityType');
        $pdo = $this->getEntityManager()->getPDO();
        $table = $this->getEntityManager()->getQuery()->toDb($entityType);

        $part = "0";
        switch ($link) {
            case 'imported':
                $part = "import_entity.is_imported = 1";
                break;
            case 'duplicates':
                $part = "import_entity.is_duplicate = 1";
                break;
            case 'updated':
                $part = "import_entity.is_updated = 1";
                break;
        }


        $sql = "
            JOIN import_entity ON
                import_entity.import_id = " . $pdo->quote($entity->id) . " AND
                import_entity.entity_type = " . $pdo->quote($entity->get('entityType')) . " AND
                import_entity.entity_id = " . $table . ".id AND
                ".$part."
        ";

        return $sql;
    }

    public function countRelated(Entity $entity, $link, $selectParams = array())
    {
        $entityType = $entity->get('entityType');

        $selectParams['customJoin'] .= $this->getRelatedJoin($entity, $link);

        return $this->getEntityManager()->getRepository($entityType)->count($selectParams);
    }

    protected function afterRemove(Entity $entity, array $options = array())
    {
        if ($entity->get('fileId')) {
            $attachment = $this->getEntityManager()->getEntity('Attachment', $entity->get('fileId'));
            if ($attachment) {
                $this->getEntityManager()->removeEntity($attachment);
            }
        }

        $pdo = $this->getEntityManager()->getPDO();
        $sql = "DELETE FROM import_entity WHERE import_id = :importId";
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':importId', $entity->id);
        $sth->execute();

        parent::afterRemove($entity, $options);

    }

}

