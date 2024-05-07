<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get('/', 'Home::index');
$routes->get('/booking', 'PustakaBooking\Contoh1::nama');
$routes->get('/siswa', 'Siswa::index');
$routes->get('/datamatakuliah', 'Matakuliah::index');
$routes->get('/home', 'Web::home');
$routes->get('/about', 'Web::about');
