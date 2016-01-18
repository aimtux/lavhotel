<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['prefix' => 'admin','middleware' => ['web', 'auth']], function () {
	Route::get('/', function(){
		return view ('admin.index');
	});

	/*Reservation Route*/
	    Route::get('pesan', 'PesanController@index');
	    Route::post('pesan', 'PesanController@validation');
	    Route::post('pesan/store', 'PesanController@store');
	    Route::get('pesan/{pesan}', 'PesanController@showDetail');
	    Route::get('pesan/{pesan}/create', 'PesanController@create');
	    Route::post('pesan/{pesan}/', 'PesanController@storeData');
    /*Reservation Route*/

    Route::resource('customer', 'CustomerController');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
