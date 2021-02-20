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

Route::get('/', function () {
    return view('/inicio');
});

Route::get('inicio', function () {
    return view('/inicio');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/inscripcion_from','InscripcionController@index')->name('inscripcion_from');
Route::get('/formulario_inscripcion', function () {
    return view('inscripcion_from');
});
Route::post('guardar_inscripcion', 'InscripcionController@getwebservice')->name('guardar_inscripcion');
Route::post('guardar_inscripcion_bd', 'InscripcionController@guardar')->name('guardar_inscripcion_bd');