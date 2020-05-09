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

Route::group(['middleware' => ['auth']], function () {
    //logout
    Route::get('logout', 'AuthController@logout')->name('logout');
});

Route::group(['middleware' => ['admin']], function () {
    //dashboard
    Route::get('/admin-dashboard', 'DashboardController@adminDashboard')->name('admin.dashboard');

    //department
    Route::get('/admin-dashboard/manage-department', 'DepartmentController@manage')->name('admin.manage.department');
    Route::post('/admin-dashboard/manage-department/create', 'DepartmentController@create')->name('admin.create.department');
    Route::patch('/admin-dashboard/manage-department/update/{department}', 'DepartmentController@update')->name('admin.update.department');

    //operator
    Route::get('/admin-dashboard/manage-operator', 'OperatorController@manage')->name('admin.manage.operator');

    //risiko
    Route::get('/admin-dashboard/manage-risk', 'RiskController@manage')->name('admin.manage.risk');

});

Route::group(['middleware' => ['operator']], function () {
    //dashboard
    Route::get('/operator/dashboard', 'DashboardController@operatorDashboard')->name('operator.dashboard');
    
    //risiko
});