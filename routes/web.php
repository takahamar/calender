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
Route::post('/posts/create/{day}', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
//Route::post('/posts/{designated_at}', 'PostsController@store');
Route::get('/posts/{designated_at}', 'PostsController@list');
//Route::get('/posts/{day}', 'PostsController@show');
//Route::get('/posts/{date}', 'PostsController@show');
//Route::get('/posts/{day}/{post}/edit', 'PostsController@edit');
//Route::get('/posts/{day}/{post}/edit', 'PostsController@edit');
Route::get('/posts/detail/{post}', 'PostsController@show');
Route::get('/posts/{post}/edit', 'PostsController@edit');
Route::patch('/posts/detail/{post}', 'PostsController@update');
Route::delete('/posts/detail/{post}', 'PostsController@destroy');