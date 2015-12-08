<?php
include "bootstrap.php";

$app = new \Fox\Core\Application();

if (!$app->isInstalled()) {
    header("Location: install/");
    exit;
}

if (!empty($_GET['entryPoint'])) {
    $app->runEntryPoint($_GET['entryPoint']);
    exit;
}

$app->runClient();
