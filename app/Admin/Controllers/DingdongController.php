<?php

namespace App\Admin\Controllers;

use App\Model\AdminDingdong;
use App\Model\AdminRoom;
use App\Model\DingdongRoom;
use Illuminate\Support\Facades\Auth;

class DingdongController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $dingdongs = $user->dingdongs()->paginate(10);
        return view('admin.dingdong.index', compact('dingdongs'));
    }

    public function create()
    {
        return view('admin.dingdong.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
        ]);
        $user = Auth::user();
        $params = request(['name', 'dingdong_user_id', 'address']);
        $params['admin_user_id'] = $user->id;
        $user->dingdongs()->create($params);
        return redirect('/admin/dingdongs');
    }

    public function show(AdminDingdong $dingdong)
    {

        return view('admin.dingdong.show', compact('dingdong'));
    }

    public function rooms(AdminDingdong $dingdong)
    {
        return view('admin.dingdong.room.index', compact('dingdong'));
    }

    public function room_create(AdminDingdong $dingdong)
    {
        $admin_rooms = AdminRoom::all();
        return view('admin.dingdong.room.create', compact('dingdong', 'admin_rooms'));
    }

    public function room_store(AdminDingdong $dingdong)
    {
        $this->validate(request(), [
            'name' => 'required',
        ]);
        $dingdong_id = $dingdong->id;
        $params = array_merge(request(['name']), compact('dingdong_id'));
        DingdongRoom::create($params);
        return redirect('/admin/dingdongs/' . $dingdong_id . '/rooms');
    }

    public function devices(AdminDingdong $dingdong)
    {

    }

    public function device_create(AdminDingdong $dingdong)
    {

    }
}