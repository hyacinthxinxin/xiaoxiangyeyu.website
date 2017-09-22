<?php

use Illuminate\Support\Facades\Route;

// 管理后台
Route::prefix('admin')->group(function () {
    Route::get('/login', '\App\Admin\Controllers\LoginController@index')->name('admin.login');
});