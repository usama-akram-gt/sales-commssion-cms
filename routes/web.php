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

Auth::routes(['register' => false]);
Route::get('/', function () { return view('welcome'); });

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'role:sales'], function () {
        //sales
        Route::get('sales', 'SaleController@sales')->name('sales');
        Route::resource('vue-items', 'SaleController');
    });
    Route::group(['middleware' => 'role:admin'], function () {
        //sales
        Route::get('admin', 'AdminController@index')->name('admin');
    });
    Route::group(['middleware' => 'role:manager'], function () {
        //sales
        Route::get('manager', 'ManagerController@index')->name('manager');
    });
});