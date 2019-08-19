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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PagesController@index');
// Route::get('/about', function () {
//     return view('about');
// });
Route::get('/about', 'PagesController@about')->name('about');
// Route::get('/user/{name}', function ($name) {
//     return 'user name= '.$name ;
// });
Route::get('/services', 'PagesController@services')->name('services');

Route::resource('clients','ClientsController');

Route::resource('comptes','ComptesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
