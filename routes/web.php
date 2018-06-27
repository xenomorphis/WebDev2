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

Route::view('/','shop');
Route::view('/artists','shop');
Route::view('/cabaret','shop');
Route::view('/concerts','shop');
Route::view('/locations','shop');
Route::view('/theatre','shop');
Route::view('/disclaimer','disclaimer');
Route::view('/impressum','impressum');
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::view('/admin2','admin2');