<?php
/**
 * Created by PhpStorm.
 * User: fanxin
 * Date: 2017/10/9
 * Time: 上午9:55
 */

namespace App\Admin\Controllers;


use App\Model\Dingdong;
use App\Model\DingdongControl;
use App\Model\AdminRoom;
use App\Model\AdminDevice;
use App\Model\AdminCommand;

class DingdongControlController extends Controller
{
    public function index(Dingdong $dingdong)
    {
        $controls = DingdongControl::paginate(10);
        return view('admin.dingdong_control.index', compact('dingdong', 'controls'));
    }

    public function create(Dingdong $dingdong)
    {
        $rooms = AdminRoom::all();
        $devices = AdminDevice::all();
        $commands = AdminCommand::all();
        return view('admin.dingdong_control.create', compact('dingdong', 'rooms', 'devices', 'commands'));
    }

    public function store(Dingdong $dingdong)
    {
        $this->validate(request(), [
            'command_address' => 'required',
            'command_value' => 'required',
        ]);
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

    public function edit(Dingdong $dingdong, DingdongControl $control) {
        $rooms = AdminRoom::all();
        $devices = AdminDevice::all();
        $commands = AdminCommand::all();
        return view('admin.dingdong_control.edit', compact('dingdong', 'control', 'rooms', 'devices', 'commands'));
    }

    public function update(Dingdong $dingdong, DingdongControl $control) {
        $this->validate(request(), [
            'command_address' => 'required',
            'command_value' => 'required',
        ]);
        $dingdong_id = $dingdong->id;
        $room_id = intval(request('room_id'));
        $params['room_name'] = AdminRoom::find($room_id)->name;
        $device_id = intval(request('device_id'));
        $params['device_name'] = AdminDevice::find($device_id)->name;
        $command_id = intval(request('command_id'));
        $params['command_name'] = AdminCommand::find($command_id)->name;
        $params['command_type'] = AdminCommand::find($command_id)->type;
        $params['command_address'] = request('command_address');
        $params['command_value'] = intval(request('command_value'));
        $control->update($params);
        return redirect('/admin/dingdongs/' . $dingdong_id . '/controls');

    }

    public function delete(Dingdong $dingdong, DingdongControl $control)
    {
        $dingdong_id = $dingdong->id;
        $control->delete();
        return redirect('/admin/dingdongs/' . $dingdong_id . '/controls');
    }
}