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



Route::get('home/', 'MyController@home');

Route::get('forgot/', 'MyController@forgot');

Route::get('login/', 'MyController@login');

Route::any('checkLogin/', 'MyController@checkLogin');

Route::post('redirectToLogin/', 'MyController@redirectToLogin');


Route::get('/', function () {
    return view('welcome');
});
