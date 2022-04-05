<?php
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\CareerAdminController;
use App\Http\Controllers\admin\CategoryAdminController;
use App\Http\Controllers\admin\CompanyAdminController;
use App\Http\Controllers\admin\ServiceAdminController;
use App\Http\Controllers\admin\OfferAdminController;



use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('admin.layout.master');
});
Route::get('/show_users', [AuthController::class,'listAll']
)->name('show_users');
Route::get('/add_users', [AuthController::class,'create']
)->name('add_users');
//career route
Route::get('/show_careers', [CareerAdminController::class,'listAll']
)->name('show_careers');
Route::get('/add_career', [CareerAdminController::class,'create']
)->name('add_career');

/// category route 
Route::get('/show_categories', [CategoryAdminController::class,'listAll']
)->name('show_categories');
Route::get('/add_category', [CategoryAdminController::class,'create']
)->name('add_category');
//company route
Route::get('/show_companies', [CompanyAdminController::class,'listAll']
)->name('show_companies');
Route::get('/add_company', [CompanyAdminController::class,'create']
)->name('add_company');
//service route
Route::get('/show_services', [ServiceAdminController::class,'listAll']
)->name('show_services');
Route::get('/add_service', [ServiceAdminController::class,'create']
)->name('add_service');
//offer route
Route::get('/show_offers', [OfferAdminController::class,'listAll']
)->name('show_offers');
Route::get('/add_offer', [OfferAdminController::class,'create']
)->name('add_offer');

