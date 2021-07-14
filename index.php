<?php

require_once __DIR__.'/vendor/autoload.php';

use app\controllers\TodoController;
use app\Router;

$router = new Router();

$router->get('/', [TodoController::class, 'index']);
$router->get('/tasks', [TodoController::class, 'index']);

$router->get('/tasks/create', [TodoController::class, 'create']);
$router->post('/tasks/create', [TodoController::class, 'create']);

$router->get('/tasks/update', [TodoController::class, 'update']);
$router->post('/tasks/update', [TodoController::class, 'update']);

$router->post('/tasks/delete', [TodoController::class, 'delete']);

$router->resolve();
