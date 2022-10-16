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
$routes->setDefaultNamespace('App\Controllers' );
$routes->setDefaultController('HomeController' );
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

    $routes->get('/', 'HomeController::index');

    $routes->group('admin', function ($route) {
        /*Admin Login Routes*/
        $route->get('login', 'Admin\LoginController::index');
        $route->post('login', 'Admin\LoginController::adminLogin');
        $route->get('logout', 'Admin\LoginController::adminLogout');

        $route->match(['post', 'get'],'change-password', 'Admin\LoginController::changePassword' , ["filter"=>"admin"]);
        $route->get('profile', 'Admin\LoginController::adminProfile', ["filter"=>"admin"]);
        $route->post('profile/update', 'Admin\LoginController::updateProfile', ["filter"=>"admin"]);

        /*dashboard*/
        $route->get('dashboard', 'Admin\DashboardController::index', ["filter"=>"admin"]);

        /*home slider */
        $route->match( (['post','get']), 'home-slider', 'Admin\HomeController::index' , ["filter"=>"admin"]);
        $route->match(['post','get'],'home-slider/add', 'Admin\HomeController::addSlider' , ["filter"=>"admin"]);
        $route->match(['post','get'],'home-slider/(:num)', 'Admin\HomeController::updateSlider/$1' , ["filter"=>"admin"]);
        $route->get('home-slider/delete/(:num)', 'Admin\HomeController::deleteSlider/$1' , ["filter"=>"admin"]);

        /*apartment states*/
        $route->match( (['post','get']), 'apartment-state', 'Admin\ApartmentStateController::index' , ["filter"=>"admin"]);
        $route->match(['post','get'],'apartment-state/add', 'Admin\ApartmentStateController::addState' , ["filter"=>"admin"]);
        $route->get('apartment-state/delete/(:num)', 'Admin\ApartmentStateController::deleteState/$1' , ["filter"=>"admin"]);

        /* highlight apartment*/
        $route->match( (['post','get']), 'highlight-apartment', 'Admin\HighlightApartmentController::index' , ["filter"=>"admin"]);
        $route->match(['post','get'],'highlight-apartment/add', 'Admin\HighlightApartmentController::addHighlight' , ["filter"=>"admin"]);
        $route->get('highlight-apartment/delete/(:num)', 'Admin\HighlightApartmentController::deleteHighlight/$1' , ["filter"=>"admin"]);

        /* apartments*/
        $route->match( (['post','get']), 'apartment', 'Admin\ApartmentController::index' , ["filter"=>"admin"]);
        $route->match(['post','get'],'apartment/add', 'Admin\ApartmentController::addApartment' , ["filter"=>"admin"]);
        $route->match(['post','get'],'apartment/(:num)', 'Admin\ApartmentController::updateApartment/$1' , ["filter"=>"admin"]);
        $route->get('apartment/delete/(:num)', 'Admin\ApartmentController::deleteApartment/$1' , ["filter"=>"admin"]);
        $route->get('apartment/view/(:num)/(:num)', 'Admin\ApartmentController::viewApartment/$1/$2' , ["filter"=>"admin"]);

        /*search engine*/
    //    $route->get('search-engine/(:alpha)/(:any)', 'Admin\SearchController::index/, $1/$2' ["filter"=>"admin"]);
        $route->get('search-engine/(:alpha)/(:any)', 'Admin\SearchController::index/$1/$2' , ["filter"=>"admin"]);
    });

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
