<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/jemaat', 'JemaatController::index');
$routes->get('/getjemaat', 'JemaatController::getJemaat');
$routes->post('/setjemaat', 'JemaatController::setJemaat');

$routes->get('/jemaat/add-form', 'JemaatController::addForm');
