<?php

namespace App\Http\Controllers\admin;
use Hash;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   
    public function showLogin(){
        if(Auth::check())
        return redirect()->route($this->checkRole());
        else
        return view('admin.login');
    }
    public function checkRole(){
        if(Auth::user()->hasRole('admin'))
        return 'show_users';
        else 
        return'index';
    }
    public function login(Request $req){
        Validator::validate($req->all(),[
         'email'=>['email','required','min:3','max:255'],
         'password'=>['required','min:6']
        ],
        [
        'email.required'=>'this field is required',
        'email.min'=>'email can not be less than 3 letters',
        'email.max'=>'email can not be more than 20 letters',
       
        'password.required'=>'password  is required',
        'password.min'=>'Password must be more than 6 characters'


        

        


        ]); 
        if(Auth::attempt(['password' => $req['password'], 'email' => $req['email']])) 
        {
         if(Auth::user()->hasRole('admin'))   
         return redirect()->route('show_users');
         else 
         return redirect()->route('index');
        }
        return redirect()->back();
    
    //    $u=new User();
    //    $u->name=$req->input('email');
    //    $u->password=$req->input('password');
    //    if($u->save())
    //    return redirect()->route('show_users'); 
        

    }
    public function createUser(){
        return view('admin.users.create');
    }
    public function register(Request $req){
        Validator::validate($req->all(),[
            'name'=>['required','min:3','max:20'],
            'email'=>['email','required','min:10','max:100','unique:users,email'],
            'u_password'=>['required','min:6'],
            'confirm_pass'=>['same:u_password']
           ],
           [
           'name.required'=>'name field is required',
           'name.min'=>'can not be less than 3 letters',
           'name.max'=>'can not be more than 20 letters',
           'email.required'=>'email field is required',
           'email.min'=>'can not be less than 10 letters',
           'email.max'=>'can not be more than 100 letters',
           'email.unique'=>'It is already exist',
           'email.email'=>'incorrect email format',
           'u_password.required'=>'password is field is required',
           'u_password.min'=>'Password must be more than 6 characters',
           'confirm_pass.same'=>'Password doesnt match'
   
   
           
   
           
   
   
           ]); 
           $u=new User();
           $u->name=$req->name;
           $u->password=Hash::make($req->password);
           $u->email=$req->email;
           
           if($u->save()){
            $u->attachRole('admin');
            return redirect()->route('show_users')->with(['success'=>'user created successful']);


           }
           return back()->with(['error'=>'can not create user']);

    }
    public function listAll(){
        $users= User::all();
         
        return view('admin.users.list_users')
        ->with('allUsers',$users);
    }
    public function editUser(){
        $u=User::find(5);
        if($u->hasRole('admin')){

        }else{

        }
    }
    public function resetPassword(){

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');

    }

    public function create(){
        return view('admin.users.add_user');
    }
   
}
