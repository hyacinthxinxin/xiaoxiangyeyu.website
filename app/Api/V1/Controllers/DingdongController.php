<?php
/**
 * Created by PhpStorm.
 * User: fanxin
 * Date: 2017/10/6
 * Time: 下午9:23
 */

namespace App\Api\V1\Controllers;


use App\Model\AdminDingdong;

class DingdongController extends Controller
{
    public function index()
    {
        return 'dingdong';
    }

    public function receive()
    {
        $data = request()->all();
        $dingdong = AdminDingdong::with('rooms')->find(1);
        $result = ['receive' => $data, 'dingdong' => $dingdong];
        logger(['info' => 'receive data', 'result' => $result]);
        return $result;
    }
}