<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin(){
        return view('admin.login');
    }
    public function listAll(){
        return view('admin.users.list_users');
    }
}
