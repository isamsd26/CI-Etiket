<?php

use CodeIgniter\Router\RouteCollection;

// route untuk dashboard
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'DashController::index');
$routes->get('page/wisata', 'DashController::wisata');
$routes->get('pesan/(:num)', 'DashController::pesanTiket/$1');
$routes->get('login', 'DashController::login');
