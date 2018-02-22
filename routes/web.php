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

  Route::get('/verificar/email/{code}', 'RegisterController@verify');
});

Route::get('/', 'ProductesController@index');
/*TOTS ELS PRODUCTES*/
Route::name('ruta_productes')->get('/productes', 'ProductesController@index');
/*UN PRODUCTE*/
Route::name('ruta_producte')->get('/productes/{producte}', 'ProductesController@show');
/* PRODUCTE QUE VOLEM ELIMINAR */
Route::get('productes/{id}/destroy', 'NotesController@destroy')->name('notes.destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Afegir al carro*/
Route::name('ruta_afegir_carro')->get('/carro/{producte}', 'CarroController@afegir');
/*Mostrar carro*/
Route::name('ruta_carro')->get('/carro', 'CarroController@index');
/*Eliminar carro*/
Route::name('ruta_eliminar_carro')->get('/carro/del/{producte}', 'CarroController@eliminar');
/*Actualitzar carro*/
Route::name('ruta_actualitzar_carro')->get('/carro/up/{producte}', 'CarroController@actualitzar');


Route::get('/users', 'UserController@index')->name('ruta_llistar_usuaris');
Route::get('/users','UserController@roles_by_user')->name('role_name');

/*Route::get(
   'role_name', 
   [
      'as'   => 'role_name',
      'uses' => 'AppController@show'
   ]
))*/

//Route::get('users/{id}/llistar_usuaris', 'NotesController@destroy')->name('notes.destroy');
