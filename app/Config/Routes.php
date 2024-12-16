<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 
$routes->get('/', 'Home::index');
$routes->get('check-db', 'Home::checkDb');
$routes->resource('users', ['controller' => 'UserController']);
$routes->resource('posts', ['controller' => 'PostController']);
*/

// Ruta principal para probar si el servidor funciona
$routes->get('/', 'Home::index');

// Ruta para verificar conexión a la base de datos
$routes->get('check-db', 'Home::checkDb');

// Grupo de rutas para la API REST
$routes->group('api', ['namespace' => 'App\Controllers'], function ($routes) {

    // Rutas para la entidad Users
    $routes->get('users', 'UserController::index');          // Obtener todos los usuarios
    $routes->get('users/(:num)', 'UserController::show/$1'); // Obtener un usuario por ID
    $routes->post('users', 'UserController::create');        // Crear un nuevo usuario
    $routes->put('users/(:num)', 'UserController::update/$1'); // Actualizar un usuario por ID
    $routes->delete('users/(:num)', 'UserController::delete/$1'); // Eliminar un usuario por ID

    // Rutas para la entidad Posts
    $routes->get('posts', 'PostController::index');          // Obtener todos los posts
    $routes->get('posts/(:num)', 'PostController::show/$1'); // Obtener un post por ID
    $routes->post('posts', 'PostController::create');        // Crear un nuevo post
    $routes->put('posts/(:num)', 'PostController::update/$1'); // Actualizar un post por ID
    $routes->delete('posts/(:num)', 'PostController::delete/$1'); // Eliminar un post por ID

    // Ruta adicional para obtener todos los posts de un usuario específico
    //$routes->get('users/(:num)/posts', 'PostController::getPostsByUser/$1');
});