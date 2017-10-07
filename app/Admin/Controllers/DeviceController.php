<?php
/**
 * Created by PhpStorm.
 * User: fanxin
 * Date: 2017/9/14
 * Time: 下午11:50
 */

namespace App\Admin\Controllers;


use App\Model\AdminDevice;

class DeviceController extends Controller
{
    public function index()
    {
        $devices = AdminDevice::paginate(10);
        return view('admin.device.index', compact('devices'));
    }

    public function create()
    {
        return view('admin.device.create');

    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:2',
        ]);
        AdminDevice::create(request(['name']));
        return redirect('/admin/devices');
    }

}