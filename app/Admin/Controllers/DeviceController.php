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
            'name' => 'required|min:3',
            'description' => 'required|unique:admin_devices,description'
        ]);
        AdminDevice::create(request(['name', 'description']));
        return redirect('/admin/devices');
    }

}