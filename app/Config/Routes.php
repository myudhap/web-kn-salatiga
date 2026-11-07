<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->group('dev', ['namespace' => 'App\Controllers\Guest'], function($routes) {
    $routes->get('/', 'Base::index');
});
