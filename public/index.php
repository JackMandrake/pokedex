<?php

require __DIR__. '/../vendor/autoload.php';

$currentPage = isset($_GET['page']) ? $_GET['page'] : '/home';

$router = new AltoRouter();

$router->setBasePath($_SERVER['BASE_URI']);

$router->map(
    'GET',
    '/',
    [
        'method' => 'home',
        'controller' => 'MainController'
    ],
    'home'
);

$router->map(
    'GET',
    '/',
    [
        'method' => 'detail',
        'controller' => 'MainController'
    ],
    'detail'
);

$match = $router->match();

if($match) {
    $controller = 'Pokedex\Controllers\\'. $match['target']['controller'];
    $controllerObj = new $controller();

    $method = $match['target']['method'];

    $params = $match['params'];

    $controllerObj->$method($params);

} else {

    $controllerObj = new \Pokedex\Controllers\MainController;
    $controllerObj->page404();
}
