<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceAdminController extends Controller
{
    public function listAll(){
        return view('admin.services');
    }
}
