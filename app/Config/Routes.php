<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/user', 'User::index'); // Listado de usuarios 
$routes->get('/user/create', 'User::create'); // Formulario para agregar 
$routes->get('/user/edit/(:num)', 'User::edit/$1'); // Formulario de edición

// $routes->get('/Login', 'Login::index');
