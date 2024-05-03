<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Landing::index');

// public
$routes->get('/product/public', 'Guest::product');
$routes->get('/contact/public', 'Guest::contact');
$routes->get('/news/public', 'Guest::news');
