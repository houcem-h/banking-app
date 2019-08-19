<?php

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//lister les clients
Route::get('clients','Api\ClientsController@index');

//afficher un seul client
Route::get('client/{id}','Api\ClientsController@show');

//créer un nouveau client
Route::post('client','Api\ClientsController@store');

//modifier un article
Route::put('client/{id}','Api\ClientsController@update');

//supprimer un article
Route::delete('client/{id}','Api\ClientsController@destroy');