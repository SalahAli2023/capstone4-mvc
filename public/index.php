<?php
session_start();

require_once '../app/core/Router.php';
require_once '../app/core/Controller.php';
require_once '../config/database.php';
require_once '../app/models/User.php';
require_once '../app/controllers/AuthController.php';
require_once '../app/controllers/UserController.php';

$router = new Router();

// Add routes
$router->addRoute('/login', 'AuthController', 'login');
$router->addRoute('/logout', 'AuthController', 'logout');
$router->addRoute('/users', 'UserController', 'index');

// Get the requested URI
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Dispatch the request
try {
    $router->dispatch($request_uri);
} catch (Exception $e) {
    header("HTTP/1.0 404 Not Found");
    echo "404 Not Found";
}