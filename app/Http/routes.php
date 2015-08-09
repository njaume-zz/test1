<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('master');
});

Route::get('/recetas', function () {
    return view('receta.index');
});

Route::get('/tipoRecetas', function () {
    return view('tipoReceta.index');
});

Route::get('/articulos', function () {
    return view('articulo.index');
});

Route::resource('articulo','ArticuloController');
Route::get('articulo/eliminar/{id}','ArticuloController@destroy');

Route::resource('tipoReceta','TipoRecetaController');