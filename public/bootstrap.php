<?php

session_start();

require '../vendor/autoload.php';

$path = dirname(__FILE__, 2);
$dotenv = Dotenv\Dotenv::createImmutable($path);
$dotenv->load();
