<?php

use Core\Application;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/app/routes.php';

$app = new Application();

$app->run();
