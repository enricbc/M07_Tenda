<?php
Auth::routes();

Route::group(['middleware'=>'auth'], function(){
  Route::get('/home', 'HomeController@index')->name('home');
  /*CREAR UN PRODUCTE*/
  Route::name('ruta_crear_producte')->get('/productes/crear', 'ProductesController@crear');
  /*CREAR UN PRODUCTE*/
  Route::name('ruta_guardar_producte')->post('/productes', 'ProductesController@guardar');
  /*EDITAR UN PRODUCTE*/
  Route::name('ruta_editar_producte')->get('/productes/{producte}/editar', 'ProductesController@editar');

  Route::name('ruta_actualitzar_producte')->put('/productes/{producte}', 'ProductesController@actualitzar');

  Route::name('ruta_eliminar_producte')->delete('/productes/{producte}', 'ProductesController@eliminar');
});

Route::get('/', 'ProductesController@index');
/*TOTS ELS PRODUCTES*/
Route::name('ruta_productes')->get('/productes', 'ProductesController@index');
/*UN PRODUCTE*/
Route::name('ruta_producte')->get('/productes/{producte}', 'ProductesController@show');
