<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ContuctController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\ServicesController;



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

Route::get('/index',[HomeController::class,'showIndex']);
Route::get('/career',[CareerController::class,'showCareer']);
Route::get('/companies',[CompaniesController::class,'showCompanies']);
Route::get('/contuct',[ContuctController::class,'showContuct']);
Route::get('/cv',[CvController::class,'showCv']);
Route::get('/service',[ServicesController::class,'showServices']);