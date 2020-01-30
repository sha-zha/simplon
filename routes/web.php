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

Route::get('/', function () {
	
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/ajout','AjoutController@index')->name("ajout");
Route::post('/ajouts','AjoutController@store')->name("ajouts");

//Route::get('/liste','ListeController@index')->name('liste');

Route::get('/liste', 'ListeController@index')->name('liste');

Route::post('/attribuers','AttribuerController@store')->name("attribuers");

Route::get('/attribuer','AttribuerController@index')->name("attribuer");

Route::get('/delete/{id}','AttribuerController@destroy')->name("delete");