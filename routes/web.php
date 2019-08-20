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
Auth::routes();
Route::get('/A765', 'HomeController@index')->name('inicio');
Route::get('/registro', 'RegistroController@view')->name('registrarVehiculo');
Route::post('/registros', 'RegistroController@store')->name('guardarRegistro');
Route::get('/listado', 'ListadoController@view')->name('listadoVehiculos');
Route::get('/estadisticas', 'EstadisticasController@view')->name('estadisticasVehiculo');
