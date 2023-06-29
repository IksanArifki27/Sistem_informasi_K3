<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeringatanController;
use App\Models\BarangKeluar;
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

// halaman Auth
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/postLogin',[LoginController::class,'postLogin']);
Route::get('/register',[LoginController::class,'register']);
Route::post('/postRegister',[LoginController::class,'postRegister']);
// untuk change passwrd
Route::get('/resetPassword',[LoginController::class,'resetPassword']);
Route::post('/prosesChange',[LoginController::class,'prosesChange']);
// untuk lupa passwrd
Route::get('/forgotPassword',[LoginController::class,'forgotPassword']);
Route::post('/forgotPassword',[LoginController::class,'postForgotPassword']);
Route::get('/changePassword/{token}',[LoginController::class,'changePassword'])->name('resetPassword');
Route::post('/changePassword',[LoginController::class,'postChangePassword']);
// untuk logout program
Route::get('/logout',[LoginController::class,'logout']);

// halaman guest
Route::get('/',[GuestController::class,'index']);
Route::get('/detail/{id}',[GuestController::class,'detailPengumuman']);
Route::get('/kotakp3k',[GuestController::class,'kotakp3k']);

// halaman khusus admin 
Route::group(['middleware' => ['auth','CekLevel:admin']], function(){
    // halaman dashbord
    Route::get('/dashbord',[AdminController::class,'dashbord']);
    Route::get('/perilaku',[AdminController::class,'pagePerilaku']);
    Route::get('/percapaian',[AdminController::class,'percapaian']);
    Route::get('/isip3k',[AdminController::class,'isiP3K']);
    Route::get('/diagram',[AdminController::class,'diagram']);
    Route::get('/isip3k_dept',[AdminController::class,'isip3k_dept']);
    // route halaman manajemen pengumuman
    Route::get('/inputPengumuman',[AdminController::class,'inputPengumuman']);
    Route::get('/inputPemakaian',[AdminController::class,'inputPemakaian']);
    Route::post('/postPengumuman',[AdminController::class,'postPengumuman']);
    Route::get('/editPengumuman',[AdminController::class,'editPengumuman']);
    Route::post('/updatePengumuman/{id}',[AdminController::class,'updatePengumuman']);
    Route::get('/hapusData/{id}',[AdminController::class,'hapusPengumuman']);
    // route halaman manajemen penghargaan
    Route::get('/inputPenghargaan',[AdminController::class,'inputPenghargaan']);
    Route::post('/postPenghargaan',[AdminController::class,'postPenghargaan']);
    Route::get('/editPenghargaan',[AdminController::class,'editPenghargaan']);
    Route::post('/updatePenghargaan/{id}',[AdminController::class,'updatePenghargaan']);
    Route::get('/deletePenghargaan/{id}',[AdminController::class,'deletePenghargaan']);
    // tambah lokasi
    Route::get('/lokasi',[AdminController::class,'lokasi']);
    Route::post('/createLokasi',[AdminController::class,'createLokasi']);
    // tambah jenis obat
    Route::get('/obat',[AdminController::class,'obat']);
    Route::post('/createObat',[AdminController::class,'createObat']);

    // daftar User
    Route::get('/dataUser',[LoginController::class,'DataUser']);

    // route halaman Peringatan for sioktag mobile
    Route::get('/PeringatanClose',[AdminController::class,'tabelPeringatanClosed']);
    Route::get('/Peringatan',[AdminController::class,'tabelPeringatan']);
   
    Route::get('/isip3k_dept/{id}',[AdminController::class,'isip3k_Detail']);

    // tambah Stok untuk admin
    Route::get('formTambah',[BarangMasukController::class,'formTambahStok'])->name('lokasi');
    Route::get('formTambah/{id}',[BarangMasukController::class,'LokasiBarangId']);
    Route::post('/postStok',[BarangMasukController::class,'postStok']);
    Route::get('/recordMasuk',[BarangMasukController::class,'index']);

    // filter record
    Route::get('/filterKeluar',[BarangKeluarController::class,'filterKeluar'])->name('filterKeluar');
    Route::get('/filterMasuk',[BarangMasukController::class,'filterMasuk'])->name('filterMasuk');

    // keluar Stok untuk admin & user
    Route::get('inputPemakaian',[BarangKeluarController::class,'index']);
    Route::get('inputPemakaian/{id}',[BarangKeluarController::class,'LokasiBarangKeluarId']);
    Route::post('/postKeluarStok',[BarangKeluarController::class,'postKeluarStok']);
    Route::get('/recordKeluar',[BarangKeluarController::class,'recordKeluar']);
});

// halaman khusus admin & user terdaftar
Route::group(['middleware' => ['auth','CekLevel:admin,user']],function(){
    Route::get('/dashbord',[AdminController::class,'dashbord']);
    Route::get('/perilaku',[AdminController::class,'pagePerilaku']);
    Route::get('/percapaian',[AdminController::class,'percapaian']);
    Route::get('/isip3k',[AdminController::class,'isiP3K']);
    Route::get('/diagram',[AdminController::class,'diagram']);
    Route::get('/isip3k_dept',[AdminController::class,'isip3k_dept']);
   
    Route::get('/PeringatanClose',[AdminController::class,'tabelPeringatanClosed']);
    Route::get('/Peringatan',[AdminController::class,'tabelPeringatan']);
    
    Route::get('/isip3k_dept/{id}',[AdminController::class,'isip3k_Detail']);
// untuk obat keluar User
    Route::get('inputPemakaian',[BarangKeluarController::class,'index']);
    Route::get('inputPemakaian/{id}',[BarangKeluarController::class,'LokasiBarangKeluarId']);
    Route::post('/postKeluarStok',[BarangKeluarController::class,'postKeluarStok']);

});



