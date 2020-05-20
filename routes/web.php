<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'WebsiteController@index');
Route::get('/sign-in', 'WebsiteController@signIn');
Route::get('/sign-up', 'WebsiteController@signUp');

// Dashboard routes
Route::get('/dashboard', 'DashboardController@list');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
