<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/page/home', 'Home::index');
$routes->get('/movie/(:num)/(:any)', 'Home::video/$1');
$routes->get('/player/(:num)/(:segment)/(:segment)', 'Home::player/$1/$2/$3');


//หนังมาใหม่
$routes->get('/page/new_movie', 'Home::new_movie');
// Category แบ่งตามหมวดหมู่ เมื่อกดเลือก ตามหมวดหมู่
$routes->get('/page/categoty/id/(:num)/(:any)', 'Home::video_bycate/$1/$2');

// year แบ่งตาม ปี เมื่อกดเลือก  ปี
$routes->get('/page/year/(:num)', 'Home::video_byyear/$1');
// search
$routes->get('/page/search/(:any)', 'Home::video_search/$1');
//แจ้งหนังเสีย
$routes->get('/savereport/branch/(:num)/id/(:num)/reason/(:any)', 'Home::save_report/$1/$2/$3');
//ขอหนัง 
$routes->get('/saverequest/branch/(:num)/movie/(:any)', 'Home::save_request/$1/$2');

$routes->get('/series/(:num)/(:segment)/(:num)/(:segment)', 'Home::video_series/$1/$2/$3/$4');
$routes->get('/series/(:num)/(:any)', 'Home::get_ep_series/$1/$2');

$routes->get('/page/categoty/series', 'Home::list_series/');


/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
