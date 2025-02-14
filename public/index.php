<?php

use Core\Database;
use Core\DatabaseManager;
use Core\Router;
use Core\Logger;
use Core\Session;

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'helper/functions.php';
require base_path('vendor/autoload.php'); // Include Composer's autoloader

spl_autoload_register(function ($class) {
  $class = str_replace('\\', '/', $class);
  require base_path("{$class}.php");
});

$router = new Router();
$logger = new Logger();
$db = DatabaseManager::getDatabase();
$session = new Session();

$reqUri = $_SERVER['REQUEST_URI'];
$uri = parse_url($reqUri)['path'];

$method = $_SERVER['REQUEST_METHOD'];
// TODO $_POST['method'];

require base_path('routes.php');

require $router->route($uri, $method);