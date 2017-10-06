<?php

use Illuminate\Support\Facades\Route;

// 管理后台
Route::prefix('admin')->group(function () {

    Route::get('/login', '\App\Admin\Controllers\LoginController@index')->name('admin.login');
    Route::post('/login', '\App\Admin\Controllers\LoginController@login');
    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/logout', '\App\Admin\Controllers\LoginController@logout')->name('admin.logout');
        Route::get('/home', '\App\Admin\Controllers\HomeController@index')->name('admin.home');
        Route::middleware(['can:system'])->group(function () {
            Route::get('/users', '\App\Admin\Controllers\UserController@index');
            Route::get('/users/create', '\App\Admin\Controllers\UserController@create');
            Route::post('/users/store', '\App\Admin\Controllers\UserController@store');
            Route::get('/users/{user}/role', '\App\Admin\Controllers\UserController@role');
            Route::post('/users/{user}/role', '\App\Admin\Controllers\UserController@storeRole');
            Route::get('/roles', '\App\Admin\Controllers\RoleController@index');
            Route::get('/roles/create', '\App\Admin\Controllers\RoleController@create');
            Route::post('/roles/store', '\App\Admin\Controllers\RoleController@store');
            Route::get('/roles/{role}/permission', '\App\Admin\Controllers\RoleController@permission');
            Route::post('/roles/{role}/permission', '\App\Admin\Controllers\RoleController@storePermission');
            Route::get('/permissions', '\App\Admin\Controllers\PermissionController@index');
            Route::get('/permissions/create', '\App\Admin\Controllers\PermissionController@create');
            Route::post('/permissions/store', '\App\Admin\Controllers\PermissionController@store');
        });

        Route::middleware(['can:room'])->group(function () {
            Route::get('/rooms', '\App\Admin\Controllers\RoomController@index');
            Route::get('/rooms/create', '\App\Admin\Controllers\RoomController@create');
            Route::post('/rooms', '\App\Admin\Controllers\RoomController@store');
        });

        Route::middleware(['can:device'])->group(function () {
            Route::get('/devices', '\App\Admin\Controllers\DeviceController@index');
            Route::get('/devices/create', '\App\Admin\Controllers\DeviceController@create');
            Route::post('/devices', '\App\Admin\Controllers\DeviceController@store');
        });

        Route::middleware(['can:command'])->group(function () {
            Route::get('/commands', '\App\Admin\Controllers\CommandController@index');
            Route::get('/commands/create', '\App\Admin\Controllers\CommandController@create');
            Route::post('/commands', '\App\Admin\Controllers\CommandController@store');
        });

        Route::middleware(['can:dingdong'])->group(function () {
            Route::get('/dingdongs', '\App\Admin\Controllers\DingdongController@index');
            Route::get('/dingdongs/create', '\App\Admin\Controllers\DingdongController@create');
            Route::post('/dingdongs', '\App\Admin\Controllers\DingdongController@store');
            Route::get('/dingdongs/{dingdong}', '\App\Admin\Controllers\DingdongController@show');
            Route::get('/dingdongs/{dingdong}/rooms', '\App\Admin\Controllers\DingdongController@rooms');
            Route::get('/dingdongs/{dingdong}/rooms/create', '\App\Admin\Controllers\DingdongController@room_create');
            Route::post('/dingdongs/{dingdong}/rooms', '\App\Admin\Controllers\DingdongController@room_store');
        });

    });
});