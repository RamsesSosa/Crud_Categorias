<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 /*
 get ('/ruta_web' , Controlador::funcion)
 */

$routes->get('/', 'Home::index');

// CATEGORIAS

$routes->get('/categorias', 'CategoriaController::index');
$routes->get('/categorias/(:num)', 'CategoriaController::show/$1');
$routes->get('/categorias/create', 'CategoriaController::create');
$routes->post('/categorias/store', 'CategoriaController::store');
$routes->get('/categorias/(:num)/edit', 'CategoriaController::edit/$1');
$routes->post('/categorias/(:num)/update', 'CategoriaController::update/$1');
$routes->get('/categorias/(:num)/delete', 'CategoriaController::delete/$1');


$routes->get('/plantilla', 'Home::plantilla');

// LOGIN

$routes->get('/login','CategoriaController::login');

$routes->post('/login','CategoriaController::validarLogin');

$routes->get('/logout','CategoriaController::logout');
