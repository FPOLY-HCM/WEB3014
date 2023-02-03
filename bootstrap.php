<?php

use Core\Application;

session_start();

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/app/routes.php';
require_once __DIR__ . '/app/helpers.php';

$app = new Application();

$app->run();
