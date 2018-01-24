<?php

/*TOTS ELS PRODUCTES*/
Route::name('ruta_productes')->get('/productes', 'ProductesController@index');
/*CREAR UN PRODUCTE*/
Route::name('ruta_crear_producte')->get('/productes/crear', 'ProductesController@crear');
/*CREAR UN PRODUCTE*/
Route::name('ruta_guardar_producte')->post('/productes', 'ProductesController@guardar');
/*UN PRODUCTE*/
Route::name('ruta_producte')->get('/productes/{producte}', 'ProductesController@show');
/*EDITAR UN PRODUCTE*/
Route::name('ruta_editar_producte')->get('/productes/{producte}/editar', 'ProductesController@editar');

Route::name('ruta_actualitzar_producte')->put('/productes/{producte}', 'ProductesController@actualitzar');
