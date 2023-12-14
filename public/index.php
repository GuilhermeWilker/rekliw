<?php

session_start();
require '../vendor/autoload.php';

$path = dirname(__FILE__, 2);
$dotenv = Dotenv\Dotenv::createImmutable($path);
$dotenv->load();

use Dotenv\Dotenv;
use Slim\Factory\AppFactory;
use Slim\Middleware\MethodOverrideMiddleware;

$app = AppFactory::create();
require '../src/helpers/constants.php';
require '../src/helpers/functions.php';
require '../src/routes/web.php';

$methodOverrideMiddleware = new MethodOverrideMiddleware();
$app->add($methodOverrideMiddleware);

$app->run();
