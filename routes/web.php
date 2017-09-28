<?php

use Illuminate\Support\Facades\Route;


Route::get('/', '\App\Http\Controllers\HomeController@index');
// 用户模块
// 注册页面
Route::get('/register', '\App\Http\Controllers\RegisterController@index')->name('register');
// 注册行为
Route::post('/register', '\App\Http\Controllers\RegisterController@register');
// 登录页面
Route::get('/login', '\App\Http\Controllers\LoginController@index')->name('login');
// 登录行为
Route::post('/login', '\App\Http\Controllers\LoginController@login');

Route::middleware('auth:web')->group(function () {
    Route::get('/logout', '\App\Http\Controllers\LoginController@logout');
    // 个人设置页面
    Route::get('/user/me/setting', '\App\Http\Controllers\UserController@setting');
    // 个人设置操作
    Route::post('/user/me/setting', '\App\Http\Controllers\UserController@settingStore');
});
include_once('admin.php');
