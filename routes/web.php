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

Auth::routes();

Route::resource('/users', 'UserController');

//
Route::get('posts/', 'PostController@index');
//Route::get('posts/create', 'PostController@create')->middleware('auth');
//Route::post('posts/', 'PostController@store')->middleware('auth');
//
//Route::get('posts/{id}', 'PostController@show');
//Route::get('posts/{id}/edit', 'PostController@edit');
//Route::put('posts/{id}', 'PostController@update');
//Route::delete('posts/{id}', 'PostController@destroy');

//Route::resource('/', 'PostController');




