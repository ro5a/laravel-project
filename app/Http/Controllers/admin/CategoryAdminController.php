<?php

namespace App\Http\Controllers\admin;
use App\Models\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryAdminController extends Controller
{
    public function listAll(){
        $cats= category::get();
        return response($cats);
        // return view('admin.categories');
    }
    public function create(){
        $newCat= new category();
        $newCat->name="web";
        $newCat->is_active=1;
        $newCat->save();
        // return view('admin.add_category');
    }
    public function show($id){
        $cat= category::find($id);
        return response($cat);

       // print_r($cat);

    }
}
