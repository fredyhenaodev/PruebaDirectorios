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

/*Route::get('/', function () {
    return view('welcome');
});*/
//Route::get('/', 'AdminController@index');
/*Route::get('/', 'UsuariosController@index');
Route::get('usuarios/create', 'UsuariosController@create');
Route::resource('usuarios', 'UsuariosController');
*/
Route::group(['middleware' => ['web']], function () {
    Route::resource('/', 'UsuariosController', ['only' => ['index', 'show']]);
    Route::resource('usuarios', 'UsuariosController');
    Route::get('create', 'UsuariosController@create');
});
