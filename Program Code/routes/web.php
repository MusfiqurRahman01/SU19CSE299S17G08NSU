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
Route::get('/signup', function () {
    return view('form');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/parkingform', function () {
    return view('parkingform');
});

Route::get('/security', function () {
    return view('security');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/user/{user}', 'UsersController@show');

Route::post('/user', 'UsersController@store');

Route::get('/user/{user}/edit', 'UsersController@index');

Route::patch('/user/{update}', 'UsersController@update');


