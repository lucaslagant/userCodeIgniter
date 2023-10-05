<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);




$routes->get('/', 'Home::index');

$routes->get('/userlist', 'UserController::index');
$routes->get('/adduser', 'UserController::formUser');
$routes->post('/submit-form', 'UserController::add');
$routes->get('/updateuser/(:num)', 'UserController::singleUser/$1');
$routes->post('/update', 'UserController::update');
$routes->get('/delete/(:num)', 'UserController::delete/$1');


if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

