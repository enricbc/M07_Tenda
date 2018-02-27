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

  Route::get('/verificar/email/{code}', 'Auth\RegisterController@verify');
});

/* ===================================[ADMINISTRACIÓ]========================================= */

Route::group(['prefix' => 'admin'], function() {

    Route::resource('users','UserController');
});

Route::redrect('admin/users/searchform', 'admin/users/searchform')->name('users.searchform');
Route::get('admin/users/searchform', 'UserController@redirect')->name('users.searchform');

//Route::get('admin.users.searchform')->name('users.searchform');

//Route::get("admin/users/search/{search}", "UserController@search")->name('users.search');*/





/* ===================================[PRODUCTES]============================================= */
Route::get('/', 'ProductesController@index');
/*TOTS ELS PRODUCTES*/
Route::name('ruta_productes')->get('/productes', 'ProductesController@index');
/*UN PRODUCTE*/
Route::name('ruta_producte')->get('/productes/{producte}', 'ProductesController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* =================================[SHOPPING CART]============================================ */
/*Afegir al carro*/
Route::name('ruta_afegir_carro')->get('/carro/k/{producte}/{rid?}', 'CarroController@afegir');
/*Mostrar carro*/
Route::name('ruta_carro')->get('/carro', 'CarroController@index');
/*Eliminar carro*/
Route::name('ruta_eliminar_carro')->get('/carro/del/{producte}', 'CarroController@eliminar');
/*Actualitzar carro*/
Route::name('ruta_actualitzar_carro')->get('/carro/up/{producte}', 'CarroController@actualitzar');




/*===================================[RUTES APIs DE TERCERS]==================================== */

Route::get('/users', 'UserController@index')->name('llistar_usuaris');

//GOOGLE LOGIN
Route::name('google')->get('google', function () {
    return view('googleAuth');
});

//redirect and callback URLs

Route::get('auth/google', 'Auth\LoginController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleCallback');
//PDF
Route::get('carro/pdf', 'PDFController@pdfcarro')->name('ruta_pdf_carro');
Route::get('/j', 'PDFController@index')->name('productos');
Route::get('/s', 'PDFController@pdf')->name('ruta_pdf_productes');

/*PAYPAL*/

// route for view/blade file
Route::get('paywithpaypal', array('as' => 'paywithpaypal','uses' => 'PaypalController@payWithPaypal',));
// route for post request
Route::post('paypal', array('as' => 'paypal','uses' => 'PaypalController@postPaymentWithpaypal',));
// route for check status responce
Route::get('paypal', array('as' => 'status','uses' => 'PaypalController@getPaymentStatus',));

Route::view('/rss', 'rss.xml')->name('rss');

