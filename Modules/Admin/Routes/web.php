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

Route::prefix('admin')->group(function() {
    Route::get('login','LoginController@loginForm')->name('admin.login');
    Route::post('login','LoginController@login')->name('admin.login');
    Route::middleware(['admin.auth'])->group(function(){
        Route::get('/', 'AdminController@index')->name('admin.index');
        Route::get('init','AdminController@init')->name('admin.init');
    });
});
