<?php

use App\Http\Controllers\AdminController;
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

// halaman khusus admin & User terdaftar
Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashbord',[AdminController::class,'dashbord']);
});
Route::get('/car',function(){
    return view('layouts.carosel');
});
