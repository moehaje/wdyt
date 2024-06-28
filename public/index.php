<?php

session_start();

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../bootstrap.php';

use Core\Router;

// John' method! :)
define('BASE_PATH', dirname(__DIR__));

$router = new Router();

require __DIR__ . '/../routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);