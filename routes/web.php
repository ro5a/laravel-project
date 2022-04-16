<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ContuctController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\ServicesController;




use App\Http\Controllers\admin\AuthController;


use App\Http\Controllers\admin\CareerAdminController;

use App\Http\Controllers\admin\CategoryAdminController;
use App\Http\Controllers\admin\CompanyAdminController;
use App\Http\Controllers\admin\ServiceAdminController;
use App\Http\Controllers\admin\OfferAdminController;
use App\Http\Controllers\admin\SettingsController;




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


Route::get('/index',[HomeController::class,'showIndex'])->name('index');
Route::get('/career',[CareerController::class,'showCareer']);
Route::get('/companies',[CompaniesController::class,'showCompanies']);
Route::get('/contuct',[ContuctController::class,'showContuct']);
Route::get('/cv',[CvController::class,'showCv']);
Route::get('/service',[ServicesController::class,'showServices']);




// Route::get('/', function () {
//     return view('admin.layout.master');
// });
//users route
Route::get('/login', [AuthController::class,'showLogin']
)->name('login');

Route::post('/do_login',[AuthController::class,'login'])->name('do_login');

Route::get('/generate_roles',[SettingsController::class,'generateRules'])->name('generate_roles');
//************************************** */
Route::group(['middleware'=>'auth'], function(){
    Route::middleware('role:admin')->get('/show_users', [AuthController::class,'listAll']
    )->name('show_users');
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
});
Route::get('/create_user',[AuthController::class,'createUser'])->name('create_user');
Route::post('/save_user',[AuthController::class,'register'])->name('save_user');


Route::get('/add_users', [AuthController::class,'create']
)->name('add_users');
//career route
Route::get('/show_careers', [CareerAdminController::class,'listAll']
)->name('show_careers');
Route::get('/add_career', [CareerAdminController::class,'create']
)->name('add_career');
Route::post('/save_career',[CareerAdminController::class,'addCareer'])->name('save_career');

/// category route 
Route::get('/show_categories', [CategoryAdminController::class,'listAll']
)->name('show_categories');
Route::get('/save_category', [CategoryAdminController::class,'create']
)->name('save_category');
Route::get('/show_cat/{id}', [CategoryAdminController::class,'show']
)->name('show_cat');
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


