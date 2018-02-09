<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function () {
    Route::prefix('city')->group(function () {
        Route::get('list', 'ApiController@index');
        Route::get('{city}', 'ApiController@show');
        Route::post('{city}', 'ApiController@update');
        Route::delete('{city}', 'ApiController@delete');
    });
});

