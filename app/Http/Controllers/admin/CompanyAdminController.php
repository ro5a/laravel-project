<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyAdminController extends Controller
{
    public function listAll(){
        return view('admin.companies');
    }
}
