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

Route::get('/liste', function () {
	$users = DB::table('students')->select('nom','prenom')->get();

	['users'=>$users];
    return view('liste',compact('users') );
});

Route::get('/attribuer', function () {
	$users = DB::table('students')->select('nom','prenom','id')->get();
	$pc = DB::table('computers')->select('label','id')->get();
	[
		'users'=>$users,
		'pc'=>$pc
	];
	
    return view('attribuer',compact('users','pc') );
});
Route::post('/attribuers','AttribuerController@store')->name("attribuers");

/*Route::get('/attribuer','AttributionController@index')->name("attribuer");*/