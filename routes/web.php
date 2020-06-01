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

Route::group(['prefix'=>'/','as' => '/'], function(){
  Route::get('/', 'IndexController@index');//utilizada
  Route::get('/cons_user','UsersController@index');//utilizada
  Route::resource('cons_user','UsersController');//utilizada
});
Route::post('/cons_user','UsersController@edit');//utilizada

Route::get('/cons_vino','VinosController@index');//utilizada
Route::resource('cons_vino','VinosController');//utilizada
//Route::get('/', 'UsersController@store');
Route::get('/profile','PerfilesController@index');//utilizada
Route::get('/register','UsersController@store');//utilizada

Auth::routes();

Route::get('/', 'HomeController@index');//utilizada
