<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SioktagController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// rest API Sioktag  mobile
Route::get('/sioktag',[SioktagController::class,'index']);
Route::post('/sioktag',[SioktagController::class,'postData']);
Route::get('/sioktag/{id}',[SioktagController::class,'showId']);
Route::put('/sioktag/{id}',[SioktagController::class,'updateData']);
Route::delete('/sioktag/{id}',[SioktagController::class,'deleteData']);