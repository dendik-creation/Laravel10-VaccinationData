<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VaksinasiController;
use App\Http\Controllers\VaksinController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login',[AuthController::class,'index'])->middleware('guest')->name('login');
Route::post('/login',[AuthController::class,'login']);


Route::group(['middleware'=>'auth'],function(){
    Route::get('/',[DashboardController::class,'index']);

    Route::post('/logout',[AuthController::class,'logout']);

    Route::resource('vaksin',VaksinController::class);
    Route::get('vaksin',[VaksinController::class,'index']);
    Route::get('vaksin-create',[VaksinController::class,'create']);
    Route::get('vaksin-edit-{id}',[VaksinController::class,'edit']);

    Route::resource('lokasi',LokasiController::class);
    Route::get('lokasi',[LokasiController::class,'index']);
    Route::get('lokasi-create',[LokasiController::class,'create']);
    Route::get('lokasi-edit-{id}',[LokasiController::class,'edit']);

    Route::resource('penduduk',PendudukController::class);
    Route::get('penduduk',[PendudukController::class,'index']);
    Route::get('penduduk-create',[PendudukController::class,'create']);
    Route::get('penduduk-edit-{id}',[PendudukController::class,'edit']);

    Route::resource('user',UserController::class);
    Route::get('user',[UserController::class,'index']);
    Route::get('user-create',[UserController::class,'create']);
    Route::get('user-edit-{id}',[UserController::class,'edit']);
    // change-password
    Route::get('user-{id}-change-password',[UserController::class,'changePasswordView']);
    Route::post('user-{id}-change-password',[UserController::class,'changePasswordPost']);
    // end change-password

    Route::resource('mvaksinasi',VaksinasiController::class);
    Route::get('mvaksinasi',[VaksinasiController::class,'index']);
    Route::get('mvaksinasi-create',[VaksinasiController::class,'create']);
    Route::get('mvaksinasi-edit-{id}',[VaksinasiController::class,'edit']);
    Route::get('/mvaksinasi-terlama',[VaksinasiController::class,'terlama']);
});
