<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true); //ini penting kalian masukkan supaya controller otomatis bisa dipanggil di url tanpa harus di daftarkan di route
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//public
$routes->get('/', 'Pub::index');

//admin/manager
$routes->get('/admin', 'Admin::index');
$routes->get('/datusr', 'Admin::user');
$routes->post('/datusr/save', 'Admin::save');
$routes->post('/datusr/edit', 'Admin::edit');
$routes->post('/datusr/delete', 'Admin::delete');

//admin->buku
$routes->get('/datbk', 'Book::index');
$routes->post('/datbk/save', 'Book::save');
$routes->post('/datbk/edit', 'Book::edit');
$routes->post('/datbk/delete', 'Book::delete');

//user
$routes->get('/user', 'User::index');
$routes->get('/inout', 'Inout::index');
$routes->post('/pikel/save', 'Inout::save');
$routes->post('/pikel/edit', 'Inout::edit');
$routes->post('/pikel/delete', 'Inout::delete');
$routes->get('/pikel', 'Inout::pikel');

//auth
$routes->get('/login', 'Login::index');
$routes->post('/cekLogin', 'Login::cekLogin');
$routes->get('/logout', 'Login::logout');
$routes->get('/regist', 'Regist::index');
$routes->get('/regist/create', 'Regist::create');


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
