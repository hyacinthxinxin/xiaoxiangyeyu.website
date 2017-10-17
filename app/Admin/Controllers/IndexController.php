<?php
namespace App\Admin\Controllers;

class IndexController extends Controller
{
    public function index() {
        return view('admin.index');
    }
}