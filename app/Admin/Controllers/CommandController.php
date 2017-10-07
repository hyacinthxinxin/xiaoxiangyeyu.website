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
        AdminCommand::create(request(['name', 'type']));
        return redirect('/admin/commands');
    }

}