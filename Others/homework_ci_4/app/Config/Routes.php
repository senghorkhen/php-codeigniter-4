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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');
$routes->group('admin',function($routes){
	$routes->add('/', 'Admin::index');
	$routes->add('dashboard', 'Admin::showDashboard');
	$routes->add('user', 'Admin::viewAllUser');
	$routes->add('remove/(:num)', 'Admin::deleteUser/$1');
	

});
$routes->group('teacher',function($routes){
	$routes->add('/', 'Teacher::index');
	$routes->add('attendance', 'Teacher::showAttendance');
	$routes->add('list', 'Teacher::viewAllTeacher');
	

});

$routes->group('student',function($routes){
	$routes->add('/', 'Student::index');
	$routes->add('add', 'Student::showFormAdd');
	$routes->add('edit/(:num)', 'Student::showFormEdit/$1');
	$routes->add('save', 'Student::addStudent');
	$routes->add('update', 'Student::updateStudent');
	$routes->add('remove/(:num)', 'Student::deleteStudent/$1');
	
});

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
