<?php

require '../vendor/autoload.php';

$path = dirname(__FILE__, 2);
$dotenv = Dotenv\Dotenv::createImmutable($path);
$dotenv->load();

use Slim\Factory\AppFactory;

$app = AppFactory::create();
require '../src/helpers/constants.php';
require '../src/helpers/functions.php';
require '../src/routes/web.php';

$app->run();
