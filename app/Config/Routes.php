<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/employee','SiteController::employee');
$routes->get('/employeeadd','SiteController::create');
$routes->post('/employeestore','SiteController::savedata'); 
$routes->get('/Employee/edit/(:num)','SiteController::edit/$1');
$routes->post('/employee/update/(:num)','SiteController::update/$1');
$routes->get('/Employee/delete/(:num)','SiteController::delete/$1');