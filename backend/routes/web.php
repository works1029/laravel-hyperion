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
    //echo 'test';
    return view('welcome');
});

//load default auth functions
//Auth::routes();

Route::get('/api_doc', function () {
    return view('api_doc');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
