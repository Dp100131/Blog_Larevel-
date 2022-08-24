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
/**
 * Route::get    | Consultar
 * Route::post   | Guerdar
 * Route::delete | Eliminar
 * Route::put    | Actualizar
 */

Route::get('/', function () {
    return 'Ruta Home';
});

Route::get('/blog', function () {
    return 'Listado de publicaciones.';
});

Route::get('/blog/{slug}', function ($slug) {

    //Consulta a base de datos

    return 'Listado de publicaciones.';
});

