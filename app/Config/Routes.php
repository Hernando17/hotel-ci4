<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Halaman utama
$routes->get('/home/index', 'Home::index');
$routes->post('/home/message', 'Home::message');
// Halaman Login
$routes->get('/login/index', 'Login::index');
$routes->post('/login/login', 'Login::login');
// logout
$routes->get('/login/logout', 'Login::logout');
// Halaman Pendaftaran
$routes->get('/register/index', 'Register::index');
$routes->post('/register/register', 'Register::register');
// Halaman Dashboard
$routes->get('/dashboard/index', 'Dashboard::index');
// User
$routes->get('/dashboard/user', 'Dashboard::user');
$routes->get('/dashboard/user/useredit/(:any)', 'Dashboard::useredit/$1');
$routes->post('/dashboard/user/userupdate/(:any)', 'Dashboard::userupdate/$1');
$routes->get('/dashboard/user/userdelete/(:any)', 'Dashboard::userdelete/$1');
// Message
$routes->get('/dashboard/message', 'Dashboard::message/$1');
$routes->delete('/dashboard/message/messagedelete/(:num)', 'Dashboard::messagedelete/$1');
$routes->get('/dashboard/messagedetail/(:any)', 'Dashboard::messagedetail/$1');
// Room
$routes->get('/dashboard/room', 'Dashboard::room/$1');
$routes->get('/dashboard/room/create', 'Dashboard::roomcreate/$1');
$routes->post('/dashboard/room/add', 'Dashboard::roomadd/$1');
$routes->get('/dashboard/room/edit/(:any)', 'Dashboard::roomedit/$1');
$routes->post('/dashboard/room/update/(:num)', 'Dashboard::roomupdate/$1');
$routes->post('/dashboard/room/delete/(:any)', 'Dashboard::roomdelete/$1');
// book
$routes->get('/dashboard/book', 'Dashboard::book/$1');
$routes->get('/dashboard/book/create', 'Dashboard::bookcreate/$1');
$routes->post('/dashboard/book/add', 'Dashboard::bookadd/$1');
$routes->post('/dashboard/book/delete/(:any)', 'Dashboard::bookdelete/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
