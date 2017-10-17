<?php

use Illuminate\Support\Facades\Route;

// 管理后台
Route::prefix('admin')->group(function () {
    Route::get('/', '\App\Admin\Controllers\IndexController@index')->name('admin.index');
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
            Route::get('/dingdongs', '\App\Admin\Controllers\DingdongController@index');
            Route::get('/dingdongs/create', '\App\Admin\Controllers\DingdongController@create');
            Route::post('/dingdongs', '\App\Admin\Controllers\DingdongController@store');
        });

        Route::middleware(['can:dingdong'])->group(function () {
            Route::get('/rooms', '\App\Admin\Controllers\RoomController@index');
            Route::get('/rooms/create', '\App\Admin\Controllers\RoomController@create');
            Route::post('/rooms', '\App\Admin\Controllers\RoomController@store');
            Route::get('/rooms/{room}/edit', '\App\Admin\Controllers\RoomController@edit');
            Route::put('/rooms/{room}', '\App\Admin\Controllers\RoomController@update');
            Route::delete('/rooms/{room}', '\App\Admin\Controllers\RoomController@delete');

            Route::get('/devices', '\App\Admin\Controllers\DeviceController@index');
            Route::get('/devices/create', '\App\Admin\Controllers\DeviceController@create');
            Route::post('/devices', '\App\Admin\Controllers\DeviceController@store');
            Route::get('/devices/{device}/edit', '\App\Admin\Controllers\DeviceController@edit');
            Route::put('/devices/{device}', '\App\Admin\Controllers\DeviceController@update');
            Route::delete('/devices/{device}', '\App\Admin\Controllers\DeviceController@delete');

            Route::get('/commands', '\App\Admin\Controllers\CommandController@index');
            Route::get('/commands/create', '\App\Admin\Controllers\CommandController@create');
            Route::post('/commands', '\App\Admin\Controllers\CommandController@store');
            Route::get('/commands/{command}/edit', '\App\Admin\Controllers\CommandController@edit');
            Route::put('/commands/{command}', '\App\Admin\Controllers\CommandController@update');
            Route::delete('/commands/{command}', '\App\Admin\Controllers\CommandController@delete');
        });

        Route::middleware(['can:project'])->group(function () {
            Route::get('/dingdongs/{dingdong}', '\App\Admin\Controllers\DingdongController@show');
            Route::put('/dingdongs/{dingdong}', '\App\Admin\Controllers\DingdongController@update');

            Route::get('/dingdongs/{dingdong}/controls', '\App\Admin\Controllers\DingdongControlController@index');
            Route::get('/dingdongs/{dingdong}/controls/create', '\App\Admin\Controllers\DingdongControlController@create');
            Route::post('/dingdongs/{dingdong}/controls', '\App\Admin\Controllers\DingdongControlController@store');
            Route::get('/dingdongs/{dingdong}/controls/{control}/edit', '\App\Admin\Controllers\DingdongControlController@edit');
            Route::put('/dingdongs/{dingdong}/controls/{control}', '\App\Admin\Controllers\DingdongControlController@update');
            Route::get('/dingdongs/{dingdong}/controls/{control}/delete', '\App\Admin\Controllers\DingdongControlController@delete');
        });

    });
});