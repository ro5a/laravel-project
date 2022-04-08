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
       $u->password=$req->input('password');
       if($u->save())
       return redirect()->route('show_users'); 
        

    }
    public function createUser(){
        return view('admin.users.register');
    }
    public function register(Request $req){
        Validator::validate($req->all(),[
            'full_name'=>['required','min:3','max:20','unique:users'],
            'email'=>['email','required','min:10','max:100','unique:users'],
            'password'=>['required','min:6'],
            'confirm_pass'=>['same:password']
           ],
           [
           'full_name.required'=>'this field is required',
           'full_name.min'=>'can not be less than 3 letters',
           'full_name.max'=>'can not be more than 20 letters',
           'full_name.unique'=>'It is already exist',
           'email.required'=>'this field is required',
           'email.min'=>'can not be less than 10 letters',
           'email.max'=>'can not be more than 100 letters',
           'email.unique'=>'It is already exist',
           'email.email'=>'incorrect email format',
           'password.required'=>'this is field is required',
           'password.min'=>'Password must be more than 6 characters',
           'confirm_pass.same'=>'Password doesnt match'
   
   
           
   
           
   
   
           ]); 
           $u=new User();
           $u->name=$req->full_name;
           $u->password=Hash::make($req->password);
           $u->email=$req->email;
           if($u->save())
           return redirect()->route('show_users');

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
