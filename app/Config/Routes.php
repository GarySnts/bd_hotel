<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('ver_clientes','ClientesController::index');
$routes->get('nuevo_cliente','ClientesController::nuevoCliente');
$routes->post('agregar_cliente','ClientesController::agregarCliente');

$routes->get('eliminar_cliente/(:num)','ClientesController::eliminarCliente/$1');
$routes->get('buscar_cliente/(:num)','ClientesController::buscarCliente/$1');
$routes->post('modificar_cliente','ClientesController::modificarCliente');