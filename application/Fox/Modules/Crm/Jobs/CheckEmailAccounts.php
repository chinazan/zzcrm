<?php
namespace Fox\Modules\Crm\Jobs;

use \Fox\Core\Exceptions;

class CheckEmailAccounts extends \Fox\Core\Jobs\Base
{
    public function run()
    {
        $service = $this->getServiceFactory()->create('EmailAccount');
        $collection = $this->getEntityManager()->getRepository('EmailAccount')->where(array('status' => 'Active'))->find();
        foreach ($collection as $entity) {
            try {
                $service->fetchFromMailServer($entity);
            } catch (\Exception $e) {
                $GLOBALS['log']->error('Job CheckEmailAccounts '.$entity->id.': [' . $e->getCode() . '] ' .$e->getMessage());
            }
        }

        return true;
    }
}

