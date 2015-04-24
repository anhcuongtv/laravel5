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
Route::resource('news','NewsController');

Route::get('admin','AdminController@index');
Route::get('admin/login','AdminController@login');
Route::post('admin/login','AdminController@postlogin');
Route::get('admin/logout','AdminController@logout');

Route::get('admin/user/add','Backend\UserController@create');
Route::post('admin/user/add','Backend\UserController@store');

Route::get('admin/role','Backend\RoleController@role');
Route::get('admin/role/add','Backend\RoleController@create_role');
Route::post('admin/role/add','Backend\RoleController@store_role');
Route::get('admin/role/edit/{id}','Backend\RoleController@edit_role');
Route::patch('admin/role/edit/{id}','Backend\RoleController@update_role');
Route::get('admin/role/delete/{id}','Backend\RoleController@destroy_role');

Route::get('admin/permission','Backend\RoleController@permission');
Route::get('admin/permission/edit/{id}','Backend\RoleController@edit_permission');
Route::patch('admin/permission/edit/{id}','Backend\RoleController@update_permission');
Route::get('admin/permission/delete/{id}','Backend\RoleController@destroy_permission');
Route::get('admin/permission/add','Backend\RoleController@create_permission');
Route::post('admin/permission/add','Backend\RoleController@store_permission');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
