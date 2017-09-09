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

Route::get('/','MainController@home');
//Route::get('/editar3','MainController@editar');

Auth::routes();

Route::resource('productos','ProductsController');
Route::resource('editar','ProductsController@edit');

/*el primer parametro define el recurso con el
que trabajariamos en este caso la tabla de productos
y debajo colocamos todas las rutas de las acciones
vinculadas al recurso*/

/*Route::group(['prefix' => 'productos' , 'middleware' => 'auth'], function(){

});*/

Route::get('/create','ProductsController@create');
//Route::get('/editar','ProductsController@edit');

Route::get('/home', 'HomeController@index');
