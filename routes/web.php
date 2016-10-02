<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/index', 'Admin\HomeController@index');
Route::get('/admin/produk/index', 'Admin\produk\ProdukController@index');
Route::get('/admin/produk/add', 'Admin\produk\ProdukController@addProduk');
Route::get('/admin/produk/edit/{ids}', 'Admin\produk\ProdukController@edit');
