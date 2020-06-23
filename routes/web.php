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

// Twitter DM - アダルト訴求
Route::get('adult', 'AdController@os');

// instagram - アダルト訴求
Route::get('instagram', 'AdController@instagram');