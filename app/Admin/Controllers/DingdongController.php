<?php
namespace App\Admin\Controllers;

use App\Model\AdminDingdong;
use Illuminate\Support\Facades\Auth;

class DingdongController extends Controller {
    public function index() {
        $user = Auth::user();
        $dingdongs  = $user->dingdongs()->paginate(1);
        return view('admin.dingdong.index', compact('dingdongs'));
    }

    public function create() {
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

    public function show(AdminDingdong $dingdong) {

        return view('admin.dingdong.show', compact('dingdong'));
    }

    public function rooms(AdminDingdong $dingdong) {
        return view('admin.dingdong.room.create');

    }

    public function room_create(AdminDingdong $dingdong) {

    }

}