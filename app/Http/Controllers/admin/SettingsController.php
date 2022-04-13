<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    function generateRules(){
        Role::create([
            'name' => 'super_admin',
            'display_name' => 'system management ', // optional
            // 'description' => 'User is the owner of a given project', // optional
        ]);
        Role::create([
            'name' => 'admin',
            'display_name' => 'content management ', // optional
            // 'description' => 'User is the owner of a given project', // optional
        ]);
        Role::create([
            'name' => 'client',
            'display_name' => 'customers', // optional
            // 'description' => 'User is the owner of a given project', // optional
        ]);

    }
}
