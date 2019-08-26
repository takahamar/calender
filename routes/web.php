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

//Route::get('/', 'PostsController@index');
Route::get('/', function () {
    return view('auth/login');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/calender/{id}', 'PostsController@index');
    Route::post('/calender/{id}/posts/create/{day}', 'PostsController@create');
    Route::post('/calender/posts', 'PostsController@store');
    //Route::post('/posts/{designated_at}', 'PostsController@store');
    Route::get('/calender/{id}/posts/{designated_at}', 'PostsController@list');
    //Route::get('/posts/{day}', 'PostsController@show');
    //Route::get('/posts/{date}', 'PostsController@show');
    //Route::get('/posts/{day}/{post}/edit', 'PostsController@edit');
    //Route::get('/posts/{day}/{post}/edit', 'PostsController@edit');
    Route::get('/calender/{id}/posts/detail/{post}', 'PostsController@show');
    Route::get('/calender/{id}/posts/edit/{post}', 'PostsController@edit');
    Route::patch('/calender/posts/detail/{post}', 'PostsController@update');
    Route::delete('/calender/{id}/posts/detail/{post}', 'PostsController@destroy');
    Route::get('/logout', 'PostsController@logout');
});

    
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/friends', 'FriendController@index')->middleware('auth');
Route::get('/friend/search', 'FriendController@search');