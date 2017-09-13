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
Auth::routes();

Route::group(['prefix' => 'productos' , 'middleware' => 'auth'], function(){

  Route::resource('/','ProductsController');
  Route::resource('/editar','ProductsController@edit');
  Route::resource('/create','ProductsController@create');
});

Route::get('/home', 'HomeController@index');
