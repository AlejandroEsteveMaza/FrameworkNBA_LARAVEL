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
    return view('inicio');
});

Route::get('/peliculas', function () {
    return view('peliculas');
});

Route::get('/peliculas/{idpelicula}', function ($id) {
    return view('palicula')->with(['idPelicula'=> $id]); /* usar with en el controllador al devolver la vista */
});

/* Route::get('/','IndexController@index');
Route::get('/peliculas','IndexController@peliculas');
Route::get('/peliculas/{idpelicula}','PeliculaController'); */