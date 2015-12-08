<?php
namespace Fox\Core\Loaders;

class EntityManager extends Base
{
    public function load()
    {
        $config = $this->getContainer()->get('config');

        $params = array(
            'host' => $config->get('database.host'),
            'port' => $config->get('database.port'),
            'dbname' => $config->get('database.dbname'),
            'user' => $config->get('database.user'),
            'password' => $config->get('database.password'),
            'metadata' => $this->getContainer()->get('metadata')->getOrmMetadata(),
            'repositoryFactoryClassName' => '\\Fox\\Core\\ORM\\RepositoryFactory',
            'driver' => $config->get('database.driver'),
            'platform' => $config->get('database.platform')
        );

        $entityManager = new \Fox\Core\ORM\EntityManager($params);
        $entityManager->setFoxMetadata($this->getContainer()->get('metadata'));
        $entityManager->setHookManager($this->getContainer()->get('hookManager'));
        $entityManager->setContainer($this->getContainer());

        return $entityManager;
    }
}

