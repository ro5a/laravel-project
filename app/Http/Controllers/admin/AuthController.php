<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin(){
        return view('admin.login');
    }
    public function create(){
        return view('admin.users.add_user');
    }
    public function insert(){
        return view('admin.users.add_user');
    }
}
