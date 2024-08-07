<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes = Services::routes();

// Cargar el archivo de configuración del sistema de rutas
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Configurar las Rutas
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

// Definir rutas específicas
//$routes->get('/', 'Login::index');
$routes->get('/login', 'Login::index');
$routes->post('/login/validar', 'Login::validar');
$routes->get('/logout', 'Login::logout');


// Puedes añadir más rutas aquí según tus necesidades

/*
 * --------------------------------------------------------------------
 * Cargar rutas adicionales según el entorno
 * --------------------------------------------------------------------
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
