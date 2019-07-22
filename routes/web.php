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
Route::get('/post', 'HomeController@post')->name('post');
Route::get('/external', 'HomeController@external')->name('external');
Route::get('/download', 'HomeController@download')->name('download');
Route::get('/media', 'HomeController@media')->name('media');
Route::get('/pengumuman', 'HomeController@pengumuman')->name('pengumuman');
Route::get('/agendapost', 'HomeController@agendapost')->name('agendapost');
Route::get('/artikel', 'HomeController@artikel')->name('artikel');
Route::get('/artikeldetail', 'HomeController@artikeldetail')->name('artikeldetail');
Route::get('/profil-instansi', 'HomeController@profilinstansi')->name('profilinstansi');
Route::get('/profil-visi', 'HomeController@profilvisi')->name('profilvisi');
Route::get('/profil-sejarah', 'HomeController@profilsejarah')->name('profilsejarah');
Route::get('/profil-satriya', 'HomeController@profilsatriya')->name('profilsatriya');










?>
