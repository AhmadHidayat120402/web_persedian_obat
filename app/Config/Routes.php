<?php

use App\Controllers\Home;
use App\Controllers\StokObat;
use App\Controllers\ObatMasuk;
use App\Controllers\ObatKeluar;
use App\Controllers\Dashboard;
use App\Controllers\UserController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'UserController::index');
$routes->post('login/process', 'UserController::process');

$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'Dashboard::index');

    // stok obat
    $routes->get('stok-obat', 'StokObat::index');
    $routes->add('stok-obat/newStokObat', 'StokObat::formCreate');
    $routes->add('stok-obat/new', 'StokObat::create');
    $routes->add('stok-obat/(:segment)/edit', 'StokObat::edit/$1');
    $routes->add('stok-obat/(:segment)/delete', 'StokObat::delete/$1');

    // obat masuk
    $routes->get('obat-masuk', 'ObatMasuk::index');
    $routes->add('obat-masuk/newObatMasuk', 'ObatMasuk::formCreate');
    $routes->add('obat-masuk/new', 'ObatMasuk::create');
    $routes->add('obat-masuk/(:segment)/edit', 'ObatMasuk::edit/$1');
    $routes->add('obat-masuk/(:segment)/delete', 'ObatMasuk::delete/$1');

    // obat keluar
    $routes->get('obat-keluar', 'ObatKeluar::index');
    $routes->add('obat-keluar/newObatKeluar', 'ObatKeluar::formCreate');
    $routes->add('obat-keluar/new', 'ObatKeluar::create');
    $routes->add('obat-keluar/(:segment)/edit', 'ObatKeluar::edit/$1');
    $routes->add('obat-keluar/(:segment)/delete', 'ObatKeluar::delete/$1');

    // laporan obat masuk dan keluar
    $routes->get('laporan-obat-masuk', 'LaporanObatMasukController::index');
    $routes->get('ceklaporan/cetak/(:segment)/(:segment)', 'LaporanObatMasukController::cekLaporan/$1/$2');
    $routes->get('laporan/cetak/(:segment)/(:segment)', 'LaporanObatMasukController::cetak/$1/$2');

    $routes->get('laporan-obat-keluar', 'LaporanObatKeluarController::index');
    $routes->get('ceklaporan/cetak/(:segment)/(:segment)', 'LaporanObatKeluarController::cekLaporan/$1/$2');
    $routes->get('laporan/cetak/(:segment)/(:segment)', 'LaporanObatKeluarController::cetak/$1/$2');

    $routes->get('login/logout', 'UserController::logout');
});

$routes->group('pemilik', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'Dashboard::index');

    // stok obat
    $routes->get('stok-obat', 'StokObat::index');
    $routes->add('stok-obat/newStokObat', 'StokObat::formCreate');
    $routes->add('stok-obat/new', 'StokObat::create');
    $routes->add('stok-obat/(:segment)/edit', 'StokObat::edit/$1');
    $routes->add('stok-obat/(:segment)/delete', 'StokObat::delete/$1');

    // obat masuk
    $routes->get('obat-masuk', 'ObatMasuk::index');
    $routes->add('obat-masuk/newObatMasuk', 'ObatMasuk::formCreate');
    $routes->add('obat-masuk/new', 'ObatMasuk::create');
    $routes->add('obat-masuk/(:segment)/edit', 'ObatMasuk::edit/$1');
    $routes->add('obat-masuk/(:segment)/delete', 'ObatMasuk::delete/$1');

    // obat keluar
    $routes->get('obat-keluar', 'ObatKeluar::index');
    $routes->add('obat-keluar/newObatKeluar', 'ObatKeluar::formCreate');
    $routes->add('obat-keluar/new', 'ObatKeluar::create');
    $routes->add('obat-keluar/(:segment)/edit', 'ObatKeluar::edit/$1');
    $routes->add('obat-keluar/(:segment)/delete', 'ObatKeluar::delete/$1');

    // laporan obat masuk dan keluar
    $routes->get('laporan-obat-masuk', 'LaporanObatMasukController::index');
    $routes->get('ceklaporan/cetak/(:segment)/(:segment)', 'LaporanObatMasukController::cekLaporan/$1/$2');
    $routes->get('laporan/cetak/(:segment)/(:segment)', 'LaporanObatMasukController::cetak/$1/$2');

    $routes->get('laporan-obat-keluar', 'LaporanObatKeluarController::index');
    $routes->get('ceklaporan/cetak/(:segment)/(:segment)', 'LaporanObatKeluarController::cekLaporan/$1/$2');
    $routes->get('laporan/cetak/(:segment)/(:segment)', 'LaporanObatKeluarController::cetak/$1/$2');

    $routes->get('login/logout', 'UserController::logout');
});
