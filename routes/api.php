<?php

use Illuminate\Http\Request;

// 接管路由
$api = app('Dingo\Api\Routing\Router');
// 配置api版本和路由
$api->version('v1', ['namespace' => 'App\Api\V1\Controllers'], function ($api) {
    $api->group(['prefix' => 'dingdong'], function ($api) {
        $api->get('/', 'DingdongController@index')->name('api.dingdong');
        $api->post('/receive', 'DingdongController@receive')->name('api.receive');
    });
    // 授权组
//    $api->group(['prefix' => 'auth'], function ($api) {
//        $api->post('register', 'AuthenticateController@register')->name('auth.register');
//    });
});

app('Dingo\Api\Routing\UrlGenerator')->version('v1');