<?php
$sapiName = php_sapi_name();

if (substr($sapiName, 0, 3) != 'cli') {
    die("Upgrade script can be run only via CLI.\n");
}

include "bootstrap.php";

$arg = isset($_SERVER['argv'][1]) ? trim($_SERVER['argv'][1]) : '';

if ($arg == 'version' || $arg == '-v') {
    $app = new \Fox\Core\Application();
    die("Current version is " . $app->getContainer()->get('config')->get('version') . ".\n");
}

if (empty($arg)) {
    die("Specify an upgrade package file.\n");
}

if (!file_exists($arg)) {
    die("Package file does not exist.\n");
}

$pathInfo = pathinfo($arg);
if (!isset($pathInfo['extension']) || $pathInfo['extension'] !== 'zip' || !is_file($arg)) {
    die("Unsupported package.\n");
}

$app = new \Fox\Core\Application();

$config = $app->getContainer()->get('config');
$entityManager = $app->getContainer()->get('entityManager');

$user = $entityManager->getEntity('User', 'system');
$app->getContainer()->setUser($user);

$upgradeManager = new \Fox\Core\UpgradeManager($app->getContainer());

echo "Current version is " . $config->get('version') . "\n";
echo "Start upgrade process...\n";

try {
    $fileData = file_get_contents($arg);
    $fileData = 'data:application/zip;base64,' . base64_encode($fileData);

    $upgradeId = $upgradeManager->upload($fileData);
    $upgradeManager->install(array('id' => $upgradeId));
} catch (\Exception $e) {
    die("Error: " . $e->getMessage() . "\n");
}

try {
    $app = new \Fox\Core\Application();
    $app->runRebuild();
} catch (\Exception $e) {}

echo "Upgrade is completed. New version is " . $config->get('version') . ". \n";