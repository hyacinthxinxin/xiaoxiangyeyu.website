<?php
/**
 * Created by PhpStorm.
 * User: fanxin
 * Date: 2017/9/14
 * Time: 下午11:50
 */

namespace App\Admin\Controllers;


use App\Model\AdminRoom;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = AdminRoom::paginate(10);
        return view('admin.room.index', compact('rooms'));
    }

    public function create()
    {
        return view('admin.room.create');

    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:2|unique:admin_rooms,name'
        ]);
        AdminRoom::create(request(['name']));
        return redirect('/admin/rooms');
    }

    public function edit(AdminRoom $room) {
        return view('admin.room.edit', compact('room'));
    }

    public function update(AdminRoom $room) {
        $this->validate(request(), [
            'name' => 'required',
        ]);
        $room->name = request('name');
        if ($room->save()) {
            return redirect("/admin/rooms");
        } else {
            return redirect()->back()->withInput()->withErrors('更新失败！');
        }
    }

    public function delete(AdminRoom $room) {
        $room->delete();
        return redirect()->back()->withInput()->withErrors('删除成功！');
    }


}