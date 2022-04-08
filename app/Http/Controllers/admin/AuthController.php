<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
   
    public function showLogin(){
        return view('admin.login');
    }
    public function login(Request $req){
        Validator::validate(); 

    }
    public function register(){

    }
    public function resetPassword(){

    }
    public function logout(){

    }

    public function create(){
        return view('admin.users.add_user');
    }
    public function insert(){
        return view('admin.users.add_user');
    }
}
