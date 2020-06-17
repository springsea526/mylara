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
//Route::get('/',"welcomeController@index");
Route::get('/',function(){
	//return Greeting::first()->body;
	 return App\Greeting::first()->body;
	//return "hello world";
});

Route::get('login',"loginController@login");
Route::get('show/{user}/{password}',"loginController@show");
Route::get('first',"indexController@index");