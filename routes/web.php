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

Route::get('saludar/{name?}/{lastname?}', function ($name= null, $lastname=null) {
    return ('hola '.$name.' '.$lastname);
});

Route::resource('persona','PersonaController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('listado', 'PersonaController@listado');
Route::get('busqueda/{dni}','PersonaController@busqueda');



