<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'api', 'middleware' => ['api']], function() {

    Route::get('/', function () {
        return response()->json(['message' => 'Welcome to the Errands API']);
    });

    Route::post('authenticate', 'AuthenticateController@authenticate');

    Route::group(['prefix' => 'users'], function() {
        Route::get('/', 'UsersController@index');
    });

});

