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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//post
Route::get('/post','PostController@create')->name('post.create');
Route::post('/post','PostController@store')->name('post.store');
//user
Route::get('/user/{id}','UserController@show')->name('user.show');
