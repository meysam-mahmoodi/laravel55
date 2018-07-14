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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'app'], function () {
    Route::get('/list', 'AppController@index');
    Route::get('/languages', 'AppController@languages');
    Route::get('/countries', 'AppController@countries');
    Route::get('/now', 'AppController@now');
});
