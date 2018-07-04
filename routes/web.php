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

Route::get('/','ShopController@shop');
Route::get('/artists','ShopController@shop');
Route::get('/cabaret','ShopController@shop');
Route::get('/concerts','ShopController@shop');
Route::get('/locations','ShopController@shop');
Route::get('/theatre','ShopController@shop');
Route::view('/disclaimer','disclaimer');
Route::view('/impressum','impressum');
Auth::routes();

Route::get('/search', 'ShopController@search')->name('search');
Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::view('/admin2','admin2');