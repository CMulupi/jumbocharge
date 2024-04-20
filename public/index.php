<?php
const BASE_PATH = __DIR__ .'/../';

require  BASE_PATH . 'core/functions.php';

spl_autoload_register(function ($class){
    $class=str_replace('\\','/',$class);    
        require base_path("{$class}.php");
});

$router = new core\Router;


$uri=parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = require base_path('routes.php');





$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];



$router->routeRequest($uri,$method);




