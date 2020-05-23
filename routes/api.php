<?php

use Illuminate\Support\Facades\Route;

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

/**
 * Rotas com middleware
 */
Route::group(['middleware' => ['auth:api']], function () {
    Route::get('auth/logout', 'AuthController@logout');
    Route::get('auth/user', 'AuthController@user');

    Route::resource('users', 'UserController');
    Route::resource('contacts', 'ContactController');
});

/**
 * Routes without middleware
 */
Route::group([], function () {
    Route::post('auth/login', 'AuthController@login');
    Route::post('auth/signup', 'AuthController@signup');
});
