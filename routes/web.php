<?php


Route::get('/', function () {
   return view('index');
});
Route::get('/admin', function () {
   return view('layouts/administrativo');
});
Route::get('/marcas', 'ControladorMarcas@index'); 
Route::get('/categorias', 'ControladorCategorias@index'); 
Route::get('/categorias/novo', 'ControladorCategorias@create'); 
Route::post('/categorias', 'ControladorCategorias@store'); 
Route::get('/categorias/apagar/{id}', 'ControladorCategorias@destroy'); 
Route::get('/categorias/editar/{id}', 'ControladorCategorias@edit'); 
Route::post('/categorias/{id}', 'ControladorCategorias@update'); 




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
