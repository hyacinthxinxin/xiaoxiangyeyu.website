<?php

use Illuminate\Http\Request;

// 接管路由
$api = app('Dingo\Api\Routing\Router');
// 配置api版本和路由
$api->version('v1', ['namespace' => 'App\Api\V1\Controllers'], function ($api) {
    // 测试
    $api->group(['prefix' => 'test'], function ($api) {
        $api->get('/', 'TestController@index')->name('api.test');
    });
    // 授权组
//    $api->group(['prefix' => 'auth'], function ($api) {
//        $api->post('register', 'AuthenticateController@register')->name('auth.register');
//    });
});

app('Dingo\Api\Routing\UrlGenerator')->version('v1');