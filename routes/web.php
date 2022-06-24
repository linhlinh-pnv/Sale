<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\DB;

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
Route::get('trangchu', [PageController::class , 'getIndex']);
Route::get('/type/{id}', [PageController::class , 'getLoaiSp']);
Route::get('/contact', [PageController::class , 'getContact']);
Route::get('/about', [PageController::class , 'getAbout']);
Route::get('form',[PageController::class,'getAdminAdd']);