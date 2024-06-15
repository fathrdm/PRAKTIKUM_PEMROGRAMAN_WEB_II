<?php
use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
$routes->get('login', 'Login::index');
$routes->post('login/auth', 'Login::auth');
$routes->get('logout', 'Login::logout');
$routes->get('/', 'HalamanAwal::index');
$routes->group('buku', ['filter' => 'auth'], function ($routes) {
    $routes->get('index', 'BukuRoutes::index');
    $routes->get('(:segment)/preview', 'BukuRoutes::preview/$1');
    $routes->get('create', 'BukuRoutes::create');
    $routes->post('save', 'BukuRoutes::save');
    $routes->get('edit/(:segment)', 'BukuRoutes::edit/$1');
    $routes->post('update/(:segment)', 'BukuRoutes::update/$1');
    $routes->get('(:segment)/delete', 'BukuRoutes::delete/$1');
});
