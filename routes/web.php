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


Route::get('/', 'BlogController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('post', 'PostController')->only(['index','create','store','show','edit','update','destroy']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Ruta admin

Route::get('/admin', 'AdminController@index')->middleware('auth', 'role:admin')->name('/admin');
