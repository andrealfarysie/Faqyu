<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','FrontController@getIndex');
Route::get('detail/{id}','FrontController@getDetailFaq');
Route::get('kategori/{id}','FrontController@getKategori');
Route::get('kontak','FrontController@getKontak');
Route::get('search','FrontController@getSearch');

// Route::get('/', function () {
//     return view('welcome');
// });
