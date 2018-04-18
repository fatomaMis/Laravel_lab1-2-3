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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get( 'posts',
    'postsController@index'
)->name('posts.index')->middleware('auth');

Route::get(
    'showposts/{id}',
    'postsController@show'
)->name('posts.show');

Route::get(
    'posts/create',
    'postsController@create'
)->name('posts.create');

Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('posts/{id}/edit','postsController@edit');
Route::delete('posts/{post}','postsController@destroy');
Route::post('update/{post}','postsController@update');
Route::post('posts','postsController@store');
Route::get('/home', 'HomeController@index')->name('home');
