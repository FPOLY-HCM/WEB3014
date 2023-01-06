<?php

use App\Controllers\HomeController;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('home', new Route('/', [
    '_controller' => [new HomeController(), 'index'],
]));

return $routes;