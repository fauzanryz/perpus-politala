<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'UserController::index');

// Katalog
$routes->get('katalog', 'KatalogController::show');
$routes->get('katalog/detail/(:num)', 'KatalogController::detail/$1');
$routes->get('katalog/search(:any)', 'KatalogController::search/$1');

// Koleksi
$routes->get('koleksi', 'KoleksiController::show');
$routes->get('koleksi/detail/(:num)', 'KoleksiController::detail/$1');
$routes->get('koleksi/search(:any)', 'KoleksiController::search/$1');

// Artikel
$routes->get('artikel', 'ArtikelController::show');
$routes->get('artikel/detail/(:num)', 'ArtikelController::detail/$1');
$routes->get('artikel/search(:any)', 'ArtikelController::search/$1');

// Statistik
$routes->get('statistik', 'StatistikController::show');

// e-Book
$routes->get('e-book', 'EBookController::show');

// Jurnal Digital
$routes->get('jurnal', 'JurnalController::show');

// Auth
$routes->get('login', 'AuthController::login');
$routes->post('saveRegister', 'AuthController::saveRegister');
$routes->post('auth', 'AuthController::auth');
$routes->get('logout', 'AuthController::logout');

// Admin
$routes->get('dashboard-admin', 'Admin\AdminController::index');
$routes->get('kelola-katalog', 'Admin\KelolaKatalogController::index');
