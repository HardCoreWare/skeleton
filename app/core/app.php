<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App(['settings' => ['displayErrorDetails' => true,'responseChunkSize' => 8096]]);

require_once '../app/core/container.php';

$app->get('/', '\App\Controllers\TestController:wellcome');
$app->get('/hello/{name}', '\App\Controllers\TestController:hello');
$app->get('/config', '\App\Controllers\TestController:config');
$app->get('/database', '\App\Controllers\TestController:database');
$app->run();

?>