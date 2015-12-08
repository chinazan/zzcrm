<?php
namespace Fox\Modules\Crm\Jobs;

use \Fox\Core\Exceptions;

class ProcessMassEmail extends \Fox\Core\Jobs\Base
{
    public function run()
    {
        $service = $this->getServiceFactory()->create('MassEmail');

        $massEmailList = $this->getEntityManager()->getRepository('MassEmail')->where(array(
            'status' => 'Pending',
            'startAt<=' => date('Y-m-d H:i:s')
        ))->find();
        foreach ($massEmailList as $massEmail) {
            try {
                $service->createQueue($massEmail);
            } catch (\Exception $e) {
                $GLOBALS['log']->error('Job ProcessMassEmail#createQueue '.$massEmail->id.': [' . $e->getCode() . '] ' .$e->getMessage());
            }
        }

        $massEmailList = $this->getEntityManager()->getRepository('MassEmail')->where(array(
            'status' => 'In Process'
        ))->find();
        foreach ($massEmailList as $massEmail) {
            try {
                $service->processSending($massEmail);
            } catch (\Exception $e) {
                $GLOBALS['log']->error('Job ProcessMassEmail#processSending '.$massEmail->id.': [' . $e->getCode() . '] ' .$e->getMessage());
            }
        }

        return true;
    }
}

