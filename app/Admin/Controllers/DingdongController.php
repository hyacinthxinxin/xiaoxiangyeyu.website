<?php

namespace App\Admin\Controllers;

use App\Model\AdminCommand;
use App\Model\AdminDevice;
use App\Model\AdminDingdong;
use App\Model\AdminRoom;
use App\Model\AdminUser;
use App\Model\Dingdong;
use App\Model\DingdongControl;
use App\Model\DingdongRoom;
use Illuminate\Support\Facades\Auth;

class DingdongController extends Controller
{
    public function index()
    {
        $dingdongs = Dingdong::paginate(10);
        return view('admin.dingdong.index', compact('dingdongs'));
    }

    public function create()
    {
        $users = AdminUser::all();
        return view('admin.dingdong.create', compact('users'));
    }

    public function store()
    {
        $this->validate(request(), [
            'admin_user_id' => 'required',
            'name' => 'required',
            'dingdong_user_id' => 'required',
            'address' => 'required',
        ]);
        $params = request(['admin_user_id', 'name', 'dingdong_user_id', 'address']);
        Dingdong::create($params);
        return redirect('/admin/dingdongs');
    }

    public function show(Dingdong $dingdong)
    {

        return view('admin.dingdong.show', compact('dingdong'));
    }

    public function controls(Dingdong $dingdong)
    {
        $controls = DingdongControl::paginate(10);
        return view('admin.dingdong.controls', compact('dingdong', 'controls'));
    }

    public function control_create(Dingdong $dingdong)
    {
        $rooms = AdminRoom::all();
        $devices = AdminDevice::all();
        $commands = AdminCommand::all();
        return view('admin.dingdong.control_create', compact('dingdong', 'rooms', 'devices', 'commands'));
    }

    public function control_store(Dingdong $dingdong)
    {
        $this->validate(request(), [
            'command_address' => 'required',
            'command_value' => 'required',
        ]);
        $params = [];
        $dingdong_id = $dingdong->id;
        $params['dingdong_id'] = $dingdong_id;
        $room_id = intval(request('room_id'));
        $params['room_name'] = AdminRoom::find($room_id)->name;
        $device_id = intval(request('device_id'));
        $params['device_name'] = AdminDevice::find($device_id)->name;
        $command_id = intval(request('command_id'));
        $params['command_name'] = AdminCommand::find($command_id)->name;
        $params['command_type'] = AdminCommand::find($command_id)->type;
        $params['command_address'] = request('command_address');
        $params['command_value'] = intval(request('command_value'));
        DingdongControl::create($params);
        return redirect('/admin/dingdongs/' . $dingdong_id . '/controls');
    }


}