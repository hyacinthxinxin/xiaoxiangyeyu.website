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

    public function edit(AdminDevice $device) {
        return view('admin.device.edit', compact('device'));
    }

    public function update(AdminDevice $device) {
        $this->validate(request(), [
            'name' => 'required',
        ]);
        $device->name = request('name');
        if ($device->save()) {
            return redirect("/admin/devices");
        } else {
            return redirect()->back()->withInput()->withErrors('更新失败！');
        }
    }

    public function delete(AdminDevice $device) {
        $device->delete();
        return redirect()->back()->withInput()->withErrors('删除成功！');
    }

}