<?php

require_once __DIR__. '/../vendor/autoload.php';

session_start();

define('STORAGE_PATH', __DIR__ - '/../storage');

$router = new App\Router();

$router
    ->get('/', [App\Classes\Home::class, 'index']);




echo $router->resolve(
    $_SERVER['REQUEST_URI'],
    strtolower($_SERVER['REQUEST_METHOD'])

);