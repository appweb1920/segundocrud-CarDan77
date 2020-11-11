<?php

use Illuminate\Support\Facades\Route;

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




Route::get('/', 'PiezasController@muestra');

Route::get('/CreaPieza', function () {return view('CreaPieza');});
Route::post('/guardaPieza', 'PiezasController@GuardaPieza');
Route::post('/GuardaEdicion', 'PiezasController@GuardaEdicion');
Route::get('/editapieza/{id}', 'PiezasController@EditaPieza');
Route::get('/borrapieza/{id}', 'PiezasController@Borrar');