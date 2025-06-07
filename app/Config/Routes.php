<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Tambahan routing baru
$routes->get('/pretest', 'Praktikum::pretest');
$routes->get('/profil', 'Praktikum::profil');
$routes->get('/simpan', 'Praktikum::simpan');
$routes->get('/tampil', 'Praktikum::tampil');


