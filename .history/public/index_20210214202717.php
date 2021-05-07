<?php

// On charge toutes les dépendances installées avec Composer
require_once __DIR__ . '/../vendor/autoload.php';

// On instancie AltoRouter
$router = new AltoRouter();

$router->setBasePath($_SERVER['BASE_URI']);

var_dump($router);

// On déclare nos routes
// Route pour la page principal : home
$router->map('GET', '/', [
    'controller' => 'PokedexController',
    'method' => 'home',
], 'home_page');

// route pour la page details
$router->map('GET', '/details/[i:pokemonId]', [
    'controller' => 'PokedexController',
    'method' => 'details',
], 'details_page');

$router->map('GET', '/types', [
    'controller' => 'PokedexController',
    'method' => 'allTypes',
], 'all_types_page');

$router->map('GET', '/types/[i:typeId]', [
    'controller' => 'PokedexController',
    'method' => 'type',
], 'type_page');

// route pour la rédirection 404
$router->map('GET', '/404', [
    'controller' => 'MainController',
    'method' => '404',
], '404_page');


$match = $router->match();

// On instancie les contrôleurs
if (is_array($match)) {
    $controllerName = '\Pokedex\Controllers\\' . $match['target']['controller'];
    $methodName = $match['target']['method'];

    $controller = new $controllerName();
    $controller->$methodName($match['params']);
} else {

    $controller = new \Pokedex\Controllers\MainController();
    $controller->error404();
}

