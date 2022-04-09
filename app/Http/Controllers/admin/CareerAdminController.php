<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CareerAdminController extends Controller
{
    public function listAll(){
        return view('admin.careers');
    }
    public function create(){
        return view('admin.add_career');
    }
    public function addCareer(Request $request){
        Validator::validate($request->all(),[
            'name'=>['required','max:255'],
            'description'=>['required','max:255']
            // 'image'=>['required']
           ],
           [
           'name.required'=>'name field is required',
           'description.required'=>'description field is required'
   
           ]); 
           $c= new Career();
           $c->name=$request->name;
           $c->description=$request->description;
           $c->salary=$request->salary;
           if($c->save())
           return redirect()->route('show_careers')->with(['success'=>'user created successful']);
           return back()->with(['error'=>'can not create user']);

    }

}
