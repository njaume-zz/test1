<?php

// ---Getters---
// PRIMER VISTA, LOGEO
Route::get('/', function () {
    return view('auth/login');
});
//SI PASA EL LOGEO--->HOME, con las demas opc para direcciones
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});


// ---Resources---
// --Articulos--
Route::get('articulo/eliminar/{id}','ArticuloController@destroy');
Route::resource('articulo','ArticuloController');

// --Tipos_Recetas--
Route::resource('tipoReceta','TipoRecetaController');
Route::get('tipoReceta/eliminar/{id}','TipoRecetaController@destroy');

// --Recetas--

Route::resource('receta','RecetaController');
Route::get('receta/eliminar/{id}','RecetaController@destroy');




// ---Controllers---
//Controles de logueo y registro
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);