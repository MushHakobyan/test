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

Route::get('/', 'UserController@index');

Route::get('/register', 'UserController@create');

Route::get('/login', function () {
    return view('login');
});


Route::get('/home/', 'PostsController@index');

Route::get('/home/create_post', 'PostsController@create');

Route::post('/home/create_post', 'PostsController@store');

Route::get('/home/edit_post', 'PostsController@edit');

Route::delete('/home/{id}', 'PostsController@destroy');


Route::get('/home/myposts', 'TabsController@myposts');

Route::get('/home/allposts', 'TabsController@allposts');

Auth::routes();
