<?php

use Illuminate\Support\Facades\Route;

// 管理后台
Route::prefix('admin')->group(function () {
    Route::get('/login', '\App\Admin\Controllers\LoginController@index')->name('admin.login');
    Route::post('/login', '\App\Admin\Controllers\LoginController@login')->name('admin.do_login');
    Route::middleware(['auth:admin'])->group(function (){
        Route::get('/logout', '\App\Admin\Controllers\LoginController@logout');
        Route::get('/home', '\App\Admin\Controllers\HomeController@index');
    });
});

Route::get('/', 'HomeController@index')->name('home');