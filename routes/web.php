<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoginController;


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

// halaman login
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/postLogin',[LoginController::class,'postLogin']);
Route::get('/register',[LoginController::class,'register']);
Route::post('/postRegister',[LoginController::class,'postRegister']);
Route::get('/logout',[LoginController::class,'logout']);

// halaman guest
Route::get('/',[GuestController::class,'index']);
Route::get('/detail/{id}',[GuestController::class,'detailPengumuman']);
Route::get('/kotakp3k',[GuestController::class,'kotakp3k']);

// halaman khusus admin & User terdaftar
Route::group(['middleware' => ['auth','CekLevel:admin']], function(){
    Route::get('/dashbord',[AdminController::class,'dashbord']);
    Route::get('/perilaku',[AdminController::class,'pagePerilaku']);
    Route::get('/percapaian',[AdminController::class,'percapaian']);
    Route::get('/isip3k',[AdminController::class,'isiP3K']);
    Route::get('/diagram',[AdminController::class,'diagram']);
    Route::get('/isip3k_dept',[AdminController::class,'isip3k_dept']);
    Route::get('/inputPengumuman',[AdminController::class,'inputPengumuman']);
    Route::get('/inputPemakaian',[AdminController::class,'inputPemakaian']);
    Route::post('/postPengumuman',[AdminController::class,'postPengumuman']);
    Route::get('/editPengumuman',[AdminController::class,'editPengumuman']);
    Route::post('/updatePengumuman/{id}',[AdminController::class,'updatePengumuman']);
    Route::get('/hapusData/{id}',[AdminController::class,'hapusPengumuman']);
    Route::get('/inputPenghargaan',[AdminController::class,'inputPenghargaan']);
  
});

Route::group(['middleware' => ['auth','CekLevel:admin,user']],function(){
    Route::get('/dashbord',[AdminController::class,'dashbord']);
    Route::get('/perilaku',[AdminController::class,'pagePerilaku']);
    Route::get('/percapaian',[AdminController::class,'percapaian']);
    Route::get('/isip3k',[AdminController::class,'isiP3K']);
    Route::get('/diagram',[AdminController::class,'diagram']);
    Route::get('/isip3k_dept',[AdminController::class,'isip3k_dept']);
    Route::get('/inputPemakaian',[AdminController::class,'inputPemakaian']);
});




Route::get('/car',function(){
    return view('layouts.carosel');
});
