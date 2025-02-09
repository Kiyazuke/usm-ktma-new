<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/formKtam', 'FormKtam::index');
$routes->get('/formKtam/store', 'FormKtam::store');
$routes->post('/formKtam/store', 'FormKtam::store');
$routes->get('/formKtam/get-by-daerah', 'FormKtam::getCabangByDaerah');  // Ambil cabang via AJAX


$routes->get('cabang/form', 'CabangController::index');  // Menampilkan form

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::attemptLogin');
$routes->get('/logout', 'Auth::logout');

$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);

$routes->get('/ktam_list', 'Ktam::index', ['filter' => 'auth']); // Menampilkan halaman utama daftar ktam
$routes->get('/ktam/getData', 'Ktam::getData', ['filter' => 'auth']); // Mengambil data ktam dalam format JSON untuk DataTables
$routes->post('/ktam/store', 'Ktam::store', ['filter' => 'auth']); // Menyimpan data ktam baru
$routes->delete('/ktam/delete/(:num)', 'Ktam::delete/$1', ['filter' => 'auth']); // Menghapus data ktam berdasarkan ID

$routes->get('/admin', 'AdminController::index', ['filter' => 'auth:admin']);