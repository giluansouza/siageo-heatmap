<?php

require_once __DIR__."/../vendor/autoload.php";

use DevBoot\Controller\Error404Controller;
use DevBoot\Controller\{
    HomeController,
    GoogleMapsController,
    OsmController
};

$routes = require_once __DIR__."/../config/routes.php";
$pathInfo = $_SERVER['REQUEST_URI'] ?? '/';
$httpMethod = $_SERVER['REQUEST_METHOD'];

$key = "$httpMethod|$pathInfo";
if (array_key_exists($key, $routes)) {
    $controllerClass = $routes["$httpMethod|$pathInfo"];
    $controller = new $controllerClass();
} else {
    $controller = new Error404Controller();
}

$controller->processRequest();
