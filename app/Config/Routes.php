<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Tambahkan rute baru untuk setiap menu
$routes->get('/pendidikan', 'Pendidikan::index', ['as' => 'pendidikan']);
$routes->get('/pengalaman', 'Pengalaman::index', ['as' => 'pengalaman']);
$routes->get('/keahlian', 'Keahlian::index', ['as' => 'keahlian']);