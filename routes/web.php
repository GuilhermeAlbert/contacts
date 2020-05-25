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

Route::get('/', 'WebsiteController@index')->name('index');
Route::get('/sign-in', 'WebsiteController@signIn')->name('sign-in');
Route::get('/sign-up', 'WebsiteController@signUp')->name('sign-up');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'DashboardController@list')->name('dashboard');

    Route::prefix('contacts')->group(function () {
        Route::get('/', 'ContactController@list')->name('contacts');
        Route::get('/edit/{contact_id}', 'ContactController@edit')->name('edit_contact');
        Route::get('/new', 'ContactController@create')->name('create_contact');
        Route::get('/import', 'ImportContactController@list')->name('import_contacts');
    });

    Route::get('/profile', 'UserController@list')->name('profile');
    Route::get('/trash', 'TrashController@list')->name('trash');
});
