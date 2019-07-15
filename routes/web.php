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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/subdomain', 'HomeController@subdomain')->name('subdomain');
Route::get('/agenda', 'HomeController@agenda')->name('agenda');
Route::get('/berita', 'HomeController@berita')->name('berita');
Route::get('/profil', 'HomeController@profil')->name('profil');
Route::get('/kontak', 'HomeController@kontak')->name('kontak');


?>
