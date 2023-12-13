<?php

use app\controllers\HomeController;
use app\controllers\LoginController;
use app\controllers\ProjectController;
use app\controllers\UserController;

$app->get('/', HomeController::class.':index');
$app->get('/register', UserController::class.':create');
// $app->get('/user/[0-9]+', UserController::class.':show');

$app->get('/login', LoginController::class.':index');
$app->get('/logout', LoginController::class.':destroy');
$app->get('/project/{id}', ProjectController::class.':show');

$app->post('/login', LoginController::class.':store');
$app->post('/user/store', UserController::class.':store');
// $app->post('/tag/[0-9]+', TagController::class.':store');
// $app->post('/project', ProjectController::class.':store');
