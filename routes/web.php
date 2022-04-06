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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('admin.layout.master');
});
//users route
Route::get('/add_user', [AuthController::class,'insert']
)->name('add_user');
Route::get('/show_users', [AuthController::class,'listAll']
)->name('show_users');
//career route
Route::get('/show_careers', [CareerAdminController::class,'listAll']
)->name('show_careers');
Route::get('/add_career', [CareerAdminController::class,'create']
)->name('add_career');

///
Route::get('/show_categories', [CategoryAdminController::class,'listAll']
)->name('show_categories');
Route::get('/show_companies', [CompanyAdminController::class,'listAll']
)->name('show_companies');
Route::get('/show_services', [ServiceAdminController::class,'listAll']
)->name('show_services');
Route::get('/show_offers', [OfferAdminController::class,'listAll']
)->name('show_offers');

