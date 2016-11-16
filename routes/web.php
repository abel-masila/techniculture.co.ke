<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',[
	'uses'=>'\AquaTech\Http\Controllers\HomeController@index',
	'as'=>'home',
]);
Route::get('/blog',[
	'uses'=>'\AquaTech\Http\Controllers\HomeController@blog',
	'as'=>'blog',
]);
Route::get('/alert',function(){
	return redirect()->route('home')->with('info',"New alert!");
});

Route::post('/signup',[
  'uses'=>'\AquaTech\Http\Controllers\AuthController@postRegister',
  'as'=> 'auth.signup',
]);
Route::post('/signin',[
  'uses'=>'\AquaTech\Http\Controllers\AuthController@postLogin',
  'as'=> 'auth.signin',
]);

Route::get('/signout',[
  'uses'=>'\AquaTech\Http\Controllers\AuthController@getSignout',
  'as'=> 'auth.signout'
]);