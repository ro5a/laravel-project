<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfferAdminController extends Controller
{
    public function listAll(){
        return view('admin.offers');
    }
}
