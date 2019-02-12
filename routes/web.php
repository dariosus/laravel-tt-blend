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

Route::get("/peliculas", "PeliculasController@listado");

Route::get("/generos", "GenerosController@listado");

Route::get("/topPeliculas", "PeliculasController@top");

Route::get("/actores", "ActoresController@listado");

Route::get("/detallePelicula/{id}", "PeliculasController@detalle");

Route::get("/agregarPelicula", "PeliculasController@agregar")->middleware("auth");

Route::post("/agregarPelicula", "PeliculasController@almacenar")->middleware("auth");

Route::post("/eliminarPelicula", "PeliculasController@eliminar")->middleware("auth");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
