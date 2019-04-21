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

$app->post('/checkpoint','CheckpointController@tambah');
$app->put('/checkpoint/{id}','CheckpointController@update');
$app->get('/checkpoint','CheckpointController@tampil');
$app->get('/checkpoint/{id}','CheckpointController@tampilSendiri');
$app->delete('/checkpoint/{id}','CheckpointController@hapus');

$app->post('/destinasi','CheckpointController@tambah');
$app->put('/destinasi/{id}','CheckpointController@update');
$app->get('/destinasi','CheckpointController@tampil');
$app->get('/destinasi/{id}','CheckpointController@tampilSendiri');
$app->delete('/destinasi/{id}','CheckpointController@hapus');

$app->post('/riwayat','CheckpointController@tambah');
$app->put('/riwayat/{id}','CheckpointController@update');
$app->get('/riwayat','CheckpointController@tampil');
$app->get('/riwayat/{id}','CheckpointController@tampilSendiri');
$app->delete('/riwayat/{id}','CheckpointController@hapus');

$app->post('/room','CheckpointController@tambah');
$app->put('/room/{id}','CheckpointController@update');
$app->get('/room','CheckpointController@tampil');
$app->get('/room/{id}','CheckpointController@tampilSendiri');
$app->delete('/room/{id}','CheckpointController@hapus');

$app->post('/simaksi','CheckpointController@tambah');
$app->put('/simaksi/{id}','CheckpointController@update');
$app->get('/simaksi','CheckpointController@tampil');
$app->get('/simaksi/{id}','CheckpointController@tampilSendiri');
$app->delete('/simaksi/{id}','CheckpointController@hapus');

$app->post('/transaksi','CheckpointController@tambah');
$app->put('/transaksi/{id}','CheckpointController@update');
$app->get('/transaksi','CheckpointController@tampil');
$app->get('/transaksi/{id}','CheckpointController@tampilSendiri');
$app->delete('/transaksi/{id}','CheckpointController@hapus');

$app->post('/trip','CheckpointController@tambah');
$app->put('/trip/{id}','CheckpointController@update');
$app->get('/trip','CheckpointController@tampil');
$app->get('/trip/{id}','CheckpointController@tampilSendiri');
$app->delete('/trip/{id}','CheckpointController@hapus');

$app->post('/tripdetail','CheckpointController@tambah');
$app->put('/tripdetail/{id}','CheckpointController@update');
$app->get('/tripdetail','CheckpointController@tampil');
$app->get('/tripdetail/{id}','CheckpointController@tampilSendiri');
$app->delete('/tripdetail/{id}','CheckpointController@hapus');

$app->post('/user','CheckpointController@tambah');
$app->put('/user/{id}','CheckpointController@update');
$app->get('/user','CheckpointController@tampil');
$app->get('/user/{id}','CheckpointController@tampilSendiri');
$app->delete('/user/{id}','CheckpointController@hapus');

?>
