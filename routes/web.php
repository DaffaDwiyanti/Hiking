<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/checkpoint','CheckpointController@tambah');
$router->put('/checkpoint/{id}','CheckpointController@update');
$router->get('/checkpoint','CheckpointController@tampil');
$router->get('/checkpoint/{id}','CheckpointController@tampilSendiri');
$router->delete('/checkpoint/{id}','CheckpointController@hapus');

$router->post('/destinasi','DestinasiController@tambah');
$router->put('/destinasi/{id}','DestinasiController@update');
$router->get('/destinasi','DestinasiController@tampil');
$router->get('/destinasi/{id}','DestinasiController@tampilSendiri');
$router->delete('/destinasi/{id}','DestinasiController@hapus');

$router->post('/riwayat','RiwayatTController@tambah');
$router->put('/riwayat/{id}','RiwayatTController@update');
$router->get('/riwayat','RiwayatTController@tampil');
$router->get('/riwayat/{id}','RiwayatTController@tampilSendiri');
$router->delete('/riwayat/{id}','RiwayatTController@hapus');

$router->post('/room','RoomController@tambah');
$router->put('/room/{id}','RoomController@update');
$router->get('/room','RoomController@tampil');
$router->get('/room/{id}','RoomController@tampilSendiri');
$router->delete('/room/{id}','RoomController@hapus');

$router->post('/simaksi','SimaksiController@tambah');
$router->put('/simaksi/{id}','SimaksiController@update');
$router->get('/simaksi','SimaksiController@tampil');
$router->get('/simaksi/{id}','SimaksiController@tampilSendiri');
$router->delete('/simaksi/{id}','SimaksiController@hapus');

$router->post('/transaksi','TransaksiController@tambah');
$router->put('/transaksi/{id}','TransaksiController@update');
$router->get('/transaksi','TransaksiController@tampil');
$router->get('/transaksi/{id}','TransaksiController@tampilSendiri');
$router->delete('/transaksi/{id}','TransaksiController@hapus');

$router->post('/trip','TripController@tambah');
$router->put('/trip/{id}','TripController@update');
$router->get('/trip','TripController@tampil');
$router->get('/trip/{id}','TripController@tampilSendiri');
$router->delete('/trip/{id}','TripController@hapus');

$router->post('/tripdetail','TripDetailController@tambah');
$router->put('/tripdetail/{id}','TripDetailController@update');
$router->get('/tripdetail','TripDetailController@tampil');
$router->get('/tripdetail/{id}','TripDetailController@tampilSendiri');
$router->delete('/tripdetail/{id}','TripDetailController@hapus');

$router->post('/user','UserController@tambah');
$router->put('/user/{id}','UserController@update');
$router->get('/user','UserController@tampil');
$router->get('/user/{id}','UserController@tampilSendiri');
$router->delete('/user/{id}','UserController@hapus');

?>
