<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::login'); // halaman default ke login
$routes->post('/login', 'AuthController::doLogin');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/admin', 'DashboardController::adminDashboard', ['filter' => 'role:admin']);
$routes->get('/user', 'DashboardController::userDashboard', ['filter' => 'role:user']);
