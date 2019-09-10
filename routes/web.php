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

Route::resource('article','ArticleController');

Auth::routes();


Route::get('/adminView', 'adminViewController@index');


Route::get('/test', 'testController@index');
Route::get('/Main', 'MainController@index');
Route::post('/section', 'MainController@test');
Route::get('/Chugen', 'MainController@Chugen');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



