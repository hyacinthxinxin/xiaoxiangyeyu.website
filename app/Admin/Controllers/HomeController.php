<?php
namespace App\Admin\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index() {
        $user = Auth::user();
        dump($user);

        return view('admin.home.index');
    }
}