<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// $routes->get('/libros/(:num)', 'Home::index');

//$routes->presenter('libros');

//$routes->get('Libro', 'Libros::index');

//$routes->presenter('Libros');
//$routes->presenter('Categorias');

/* $routes->group('dashboard/' , function($routes){
    $routes->presenter('Libros');
    $routes->presenter('Categorias');
});
 */

 //$routes -> presenter('Libros', ['only' => 'index']);

 //$routes -> presenter ('Libros', ['except' => 'index']);