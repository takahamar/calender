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

Route::get('/', 'PostsController@index');
Route::get('/posts/{date}/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
//Route::post('/posts/{designated_at}', 'PostsController@store');
Route::get('/posts/{designated_at}', 'PostsController@show');
//Route::get('/posts/{date}', 'PostsController@show');