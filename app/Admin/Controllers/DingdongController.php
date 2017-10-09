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
            'admin_user_id' => 'required|unique:dingdongs,admin_user_id',
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

    public function edit(Dingdong $dingdong) {
        return view('admin.dingdong.edit', compact('dingdong'));
    }

    public function update(Dingdong $dingdong) {
        $this->validate(request(), [
            'name' => 'required',
            'dingdong_user_id' => 'required',
            'address' => 'required',
        ]);
        $dingdong->name = request('name');
        $dingdong->dingdong_user_id = request('dingdong_user_id');
        $dingdong->address = request('address');
        $dingdong->save();
        return redirect("/admin/dingdongs/{$dingdong->id}");
    }

}