<?php
/**
 * Created by PhpStorm.
 * User: fanxin
 * Date: 2017/9/14
 * Time: 下午11:50
 */

namespace App\Admin\Controllers;


use App\Model\AdminCommand;

class CommandController extends Controller
{
    public function index()
    {
        $commands = AdminCommand::paginate(10);
        return view('admin.command.index', compact('commands'));
    }

    public function create()
    {
        return view('admin.command.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:2|unique:admin_commands,name',
            'type' => 'required|integer',
        ]);
        if (AdminCommand::create(request(['name', 'type']))) {
            return redirect('/admin/commands');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }

    public function edit(AdminCommand $command) {
        return view('admin.command.edit', compact('command'));
    }

    public function update(AdminCommand $command) {
        $this->validate(request(), [
            'name' => 'required|min:2',
            'type' => 'required|integer',
        ]);
        $command->name = request('name');
        $command->type = request('type');
        if ($command->save()) {
            return redirect("/admin/commands");
        } else {
            return redirect()->back()->withInput()->withErrors('更新失败！');
        }
    }

    public function delete(AdminCommand $command){
        $command->delete();
        return redirect()->back()->withInput()->withErrors('删除成功！');
    }
}