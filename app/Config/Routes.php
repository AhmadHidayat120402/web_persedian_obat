<?php

use App\Controllers\Home;
use App\Controllers\StokObat;
use App\Controllers\Dashboard;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->group('admin', function ($routes) {
    $routes->get('/', 'Dashboard::index');
    $routes->get('stok-obat', 'StokObat::index');
    $routes->add('stok-obat/new', 'StokObat::create');
    $routes->add('stok-obat/(:segment)/edit', 'StokObat::edit/$1');
    $routes->add('stok-obat/(:segment)/delete', 'StokObat::delete/$1');
});
