<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
   
    public function showLogin(){
        return view('admin.login');
    }
    public function login(Request $req){
        Validator::validate($req->all(),[
         'email_username'=>['email','required','min:3','max:20','unique:users'],
         'password'=>['required','min:6']
        ],
        [
        'email_username.required'=>'this field is required',
        'email_username.min'=>'can not be less than 3 letters',
        'email_username.max'=>'can not be more than 20 letters',
        'email_username.unique'=>'It is already exist',
        'password.required'=>'this is field is required',
        'password.rmin'=>'Password must be more than 6 characters'


        

        


        ]); 
       $u=new User();
       $u->name=$req->input('email_username');
       $u->save(); 
        

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
