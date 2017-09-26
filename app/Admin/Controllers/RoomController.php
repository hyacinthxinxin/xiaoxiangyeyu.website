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
            'name' => 'required|min:3',
            'description' => 'required|unique:rooms,description'
        ]);
        AdminRoom::create(request(['name', 'description']));
        return redirect('/admin/rooms');
    }

}