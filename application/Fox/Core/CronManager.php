<?php
namespace Fox\Core;

use \PDO;
use Fox\Core\Utils\Json;
use Fox\Core\Exceptions\NotFound;

class CronManager
{
    private $container;
    private $config;
    private $fileManager;
    private $entityManager;

    private $scheduledJobUtil;

    const PENDING = 'Pending';
    const RUNNING = 'Running';
    const SUCCESS = 'Success';
    const FAILED = 'Failed';

    protected $lastRunTime = 'data/cache/application/cronLastRunTime.php';

    public function __construct(\Fox\Core\Container $container)
    {
        $this->container = $container;

        $this->config = $this->container->get('config');
        $this->fileManager = $this->container->get('fileManager');
        $this->entityManager = $this->container->get('entityManager');
        $this->serviceFactory = $this->container->get('serviceFactory');

        $this->scheduledJobUtil = $this->container->get('scheduledJob');
        $this->cronJob = new \Fox\Core\Utils\Cron\Job($this->config, $this->entityManager);
        $this->cronScheduledJob = new \Fox\Core\Utils\Cron\ScheduledJob($this->config, $this->entityManager);
    }

    protected function getContainer()
    {
        return $this->container;
    }

    protected function getConfig()
    {
        return $this->config;
    }

    protected function getFileManager()
    {
        return $this->fileManager;
    }

    protected function getEntityManager()
    {
        return $this->entityManager;
    }

    protected function getServiceFactory()
    {
        return $this->serviceFactory;
    }

    protected function getScheduledJobUtil()
    {
        return $this->scheduledJobUtil;
    }

    protected function getCronJob()
    {
        return $this->cronJob;
    }

    protected function getCronScheduledJob()
    {
        return $this->cronScheduledJob;
    }

    protected function getLastRunTime()
    {
        $lastRunData = $this->getFileManager()->getPhpContents($this->lastRunTime);

        $lastRunTime = time() - intval($this->getConfig()->get('cron.minExecutionTime')) - 1;
        if (is_array($lastRunData) && !empty($lastRunData['time'])) {
            $lastRunTime = $lastRunData['time'];
        }

        return $lastRunTime;
    }

    protected function setLastRunTime($time)
    {
        $data = array(
            'time' => $time,
        );
        return $this->getFileManager()->putPhpContents($this->lastRunTime, $data);
    }

    protected function checkLastRunTime()
    {
        $currentTime = time();
        $lastRunTime = $this->getLastRunTime();
        $minTime = $this->getConfig()->get('cron.minExecutionTime');

        if ($currentTime > ($lastRunTime + $minTime) ) {
            return true;
        }

        return false;
    }

    /**
     * Run Cron
     *
     * @return void
     */
    public function run()
    {
        if (!$this->checkLastRunTime()) {
            $GLOBALS['log']->info('CronManager: Stop cron running, too frequent execution.');
            return;
        }

        $this->setLastRunTime(time());

        $entityManager = $this->getEntityManager();

        $cronJob = $this->getCronJob();
        $cronScheduledJob = $this->getCronScheduledJob();

        //Check scheduled jobs and create related jobs
        $this->createJobsFromScheduledJobs();

        $pendingJobs = $cronJob->getPendingJobs();

        foreach ($pendingJobs as $job) {

            $jobEntity = $entityManager->getEntity('Job', $job['id']);

            if (!isset($jobEntity)) {
                $GLOBALS['log']->error('CronManager: empty Job entity ['.$job['id'].'].');
                continue;
            }

            $jobEntity->set('status', self::RUNNING);
            $entityManager->saveEntity($jobEntity);

            $isSuccess = true;

            try {
                if (!empty($job['scheduled_job_id'])) {
                    $this->runScheduledJob($job);
                } else {
                    $this->runService($job);
                }
            } catch (\Exception $e) {
                $isSuccess = false;
                $GLOBALS['log']->error('CronManager: Failed job running, job ['.$job['id'].']. Error Details: '.$e->getMessage());
            }

            $status = $isSuccess ? self::SUCCESS : self::FAILED;

            $jobEntity->set('status', $status);
            $entityManager->saveEntity($jobEntity);

            //set status in the schedulerJobLog
            if (!empty($job['scheduled_job_id'])) {
                $cronScheduledJob->addLogRecord($job['scheduled_job_id'], $status);
            }
        }
    }

    /**
     * Run Scheduled Job
     *
     * @param  array  $job
     *
     * @return void
     */
    protected function runScheduledJob(array $job)
    {
        $jobName = $job['method'];

        $className = $this->getScheduledJobUtil()->get($jobName);
        if ($className === false) {
            throw new NotFound();
        }

        $jobClass = new $className($this->container);
        $method = $this->getScheduledJobUtil()->getMethodName();
        if (!method_exists($jobClass, $method)) {
            throw new NotFound();
        }

        $jobClass->$method();
    }

    /**
     * Run Service
     *
     * @param  array  $job
     *
     * @return void
     */
    protected function runService(array $job)
    {
        $serviceName = $job['service_name'];

        if (!$this->getServiceFactory()->checkExists($serviceName)) {
            throw new NotFound();
        }

        $service = $this->getServiceFactory()->create($serviceName);
        $serviceMethod = $job['method'];

        if (!method_exists($service, $serviceMethod)) {
            throw new NotFound();
        }

        $data = $job['data'];
        if (Json::isJSON($data)) {
            $data = Json::decode($data, true);
        }

        $service->$serviceMethod($data);
    }

    /**
     * Check scheduled jobs and create related jobs
     *
     * @return array  List of created Jobs
     */
    protected function createJobsFromScheduledJobs()
    {
        $entityManager = $this->getEntityManager();

        $activeScheduledJobs = $this->getCronScheduledJob()->getActiveJobs();

        $cronJob = $this->getCronJob();
        $runningScheduledJobs = $cronJob->getActiveJobs('scheduled_job_id', self::RUNNING, PDO::FETCH_COLUMN);

        $createdJobs = array();
        foreach ($activeScheduledJobs as $scheduledJob) {

            if (in_array($scheduledJob['id'], $runningScheduledJobs)) {
                continue;
            }

            $scheduling = $scheduledJob['scheduling'];

            $cronExpression = \Cron\CronExpression::factory($scheduling);

            try {
                $prevDate = $cronExpression->getPreviousRunDate()->format('Y-m-d H:i:s');
            } catch (\Exception $e) {
                $GLOBALS['log']->error('CronManager: ScheduledJob ['.$scheduledJob['id'].']: CronExpression - Impossible CRON expression ['.$scheduling.']');
                continue;
            }

            if ($cronExpression->isDue()) {
                $prevDate = date('Y-m-d H:i:s');
            }

            $existsJob = $cronJob->getJobByScheduledJob($scheduledJob['id'], $prevDate);

            if (!isset($existsJob) || empty($existsJob)) {
                //create a new job
                $jobEntity = $entityManager->getEntity('Job');
                $jobEntity->set(array(
                    'name' => $scheduledJob['name'],
                    'status' => self::PENDING,
                    'scheduledJobId' => $scheduledJob['id'],
                    'executeTime' => $prevDate,
                    'method' => $scheduledJob['job'],
                ));
                $jobEntityId = $entityManager->saveEntity($jobEntity);
                if (!empty($jobEntityId)) {
                    $createdJobs[] = $jobEntityId;
                }
            }
        }

        return $createdJobs;
    }
}

