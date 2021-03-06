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


Route::get('/', 'PublicController@index');

Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::resource('/city', 'CityController');
    Route::resource('/tourist', 'TouristController');
    Route::prefix('list')->group(function () {
        Route::get('/cities', 'CityController@citiesList');
        Route::get('/tourists', 'TouristController@touristsList');
    });
});