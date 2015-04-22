<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('about', 'PagesController@about');
/*
Route::get('news', 'NewsController@index');
Route::get('news/create', 'NewsController@create');
Route::get('news/{id}', 'NewsController@show');
Route::post('news','NewsController@store');
*/
Route:resource('news','NewsController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
