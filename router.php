<?php

require_once __DIR__ . '/controllers/HomeController.php';
require_once __DIR__ . '/controllers/StaticContentController.php';
require_once __DIR__ . '/partials/view.php';

$routes = require_once  __DIR__ . '/routes.php';
$route = rtrim(parse_url($_SERVER['REQUEST_URI'],  PHP_URL_PATH), '/');
$route = $route === '' ? '/' : $route;
$method = $_SERVER['REQUEST_METHOD'];
$content_route = __DIR__ . '/views';


if (array_key_exists($route, $routes[$method])) {
    [$controllerClass, $controllerMethod] = $routes[$method][$route];
    require_once __DIR__ . "/controllers/{$controllerClass}.php";
    $controller = new $controllerClass();
    $parent_content = $controller -> $controllerMethod();


} else {
    $parent_content = __DIR__ . '/view/404.php';
}

include __DIR__ . '/partials/layout.php';
include __DIR__ . '/debug.php';