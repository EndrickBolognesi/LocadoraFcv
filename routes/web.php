<?php


Route::get('/', function () {
   return view('index');
});
Route::get('/marcas', 'ControladorMarcas@index'); 
Route::get('/categorias', 'ControladorCategorias@index'); 



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
