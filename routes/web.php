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

Route::group(['middleware' => ['guest']], function () {
    //only guests can access these routes
    Route::get('/', 'AuthController@loginPage')->name('guest.login.page');
    Route::post('/login', 'AuthController@login')->name('guest.login');
});
