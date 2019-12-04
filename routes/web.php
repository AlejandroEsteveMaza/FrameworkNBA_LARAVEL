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

/* Route::get('/', function () {
    return view('inicio');
});
Route::get('/equipo', function () {
    return view('equipo');
});
Route::get('/jugadores', function () {
    return view('jugadores');
});

Route::get('/peliculas/{idpelicula}', function ($id) {
    return view('pelicula')->with(['idPelicula' => $id]); usar with en el controllador al devolver la vista 
}); 
*/

Route::get('/','IndexController@index');
Route::get('/equipo','IndexController@equipo');
Route::get('/jugadores','IndexController@jugadores');
/* Route::get('/peliculas','IndexController@peliculas');
Route::get('/peliculas/{idpelicula}','PeliculaController'); */
