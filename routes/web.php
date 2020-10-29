<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','HomeController@welcome');

// Auth Routes For Logged User
Route::group(['middleware' => 'prevent-back-history'], function() {
	Auth::routes();
	
	//Routes For Admin
	Route::group(['middleware' => ['checkRole:admin']], function() {
		Route::get('/admin','HomeController@admin');
	});
	
	//Routes For Purchase Officer
	Route::group(['middleware' => ['checkRole:po']], function() {
		Route::get('/purchase-officer','HomeController@purchase_officer');
	});

	//Routes For Other
	Route::group(['middleware' => 'auth'], function() {
		Route::get('/user','HomeController@user');
	});
});
