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

Route::get('/bienvenida/{nombre}', function ($nombre) {
  if ($nombre = d)
    return "Hola";
});


Route::get('/bienvenida/{pais}', 'PaisController@show');

Route::get('/peliculas/{id}', 'PeliculasController@show');

Route::get ('/movie/create', 'MoviesController@create');
Route::post ('movie/')
