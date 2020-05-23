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
});

/**
 * Routes without middleware
 */
Route::group([], function () {
    Route::resource('users', 'UserController');
    Route::resource('contacts', 'ContactController');
});
