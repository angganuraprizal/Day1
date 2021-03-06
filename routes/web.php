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

Route::resource('/', 'FrontendController');
Route::resource('/kategori','KategoriController');
Route::resource('/artikel','ArtikelController');

Route::get('/blog', 'FrontendController@blog');

Route::get('/blog/{artikels}', 'FrontendController@detail')->name('detail');