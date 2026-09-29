<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/ryan','Home::ryan');
$routes->get('/home','ConteudoController::index');
$routes->get('/contato','ConteudoController::contato');
$routes->get('/ofertas','ConteudoController::ofertas');
$routes->get('/hortfruit','ConteudoController::hortfruit');
$routes->get('/sobre','ConteudoController::sobre');

