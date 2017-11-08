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
Auth::routes();
Route::get('/', 'PagesController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contacto', 'PagesController@contacto');
Route::get('/noticias', 'NoticiaController@presentacion');
Route::get('/acercade', 'PagesController@acercade');
Route::get('/jugadores/{categoria}/{edad}/{edad2}', 'PlayerController@show');
Route::get('/admin/jugadores', 'PlayerController@index')->middleware('auth');
Route::get('/player/create', 'PlayerController@create')->middleware('auth');
Route::post('/player/store', 'PlayerController@store')->middleware('auth');
Route::get('/jugadores/eliminar/{id}', 'PlayerController@destroy')->middleware('auth');
Route::get('/admin/jugadores/{nombre}', 'PlayerController@find')->middleware('auth');
Route::get('/admin/noticias', 'NoticiaController@index')->middleware('auth');
Route::get('/noticia/create', 'NoticiaController@create')->middleware('auth');
Route::get('/admin/contacto', 'MensajeController@index')->middleware('auth');
Route::get('/mensaje/eliminar/{id}', 'MensajeController@destroy')->middleware('auth');
Route::post('/noticia/store', 'NoticiaController@store')->middleware('auth');
Route::post('/mensaje/store', 'MensajeController@store');

