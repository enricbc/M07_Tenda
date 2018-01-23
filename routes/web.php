<?php

/*TOTS ELS PRODUCTES*/
Route::name('ruta_productes')->get('/productes', 'ProductesController@index');
/*CREAR UN PRODUCTE*/
Route::name('ruta_crear_producte')->get('/productes/crear', 'ProductesController@crear');
/*UN PRODUCTE*/
Route::name('ruta_producte')->get('/productes/{producte}', 'ProductesController@show');
