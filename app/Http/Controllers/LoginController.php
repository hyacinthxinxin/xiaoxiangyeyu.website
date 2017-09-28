<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function welcome() {
        return \redirect('/login');
    }

    public function index()
    {
        return view('login.index');
    }

    public function login()
    {
        // 验证
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required|min:5|max:10',
            'is_remember' => 'integer',
        ]);

        $user = request(['email', 'password']);
        $is_remember = boolval(request('is_remember'));
        // 逻辑
        if (Auth::attempt($user, $is_remember)) {
            return redirect('/');

        }
        // 渲染
        return Redirect::back()->withErrors('邮箱密码不匹配');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

}
