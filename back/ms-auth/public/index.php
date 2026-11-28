<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/Config/database.php';

$app = AppFactory::create();

$cors = require __DIR__ . '/../app/Config/cors.php';
$cors($app);

$endpoints = require __DIR__ . '/../app/Routes/endpoints.php';
$endpoints($app);

$app->run();