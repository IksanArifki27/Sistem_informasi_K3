<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;
use App\Models\Lokasi;
use App\Models\Sioktag;
use App\Models\Departemen;
use App\Models\Penghargaan;
use App\Models\announcement;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Models\Penyelesaian;
use Illuminate\Http\Request;
Use \Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

use function GuzzleHttp\Promise\all;

class AdminController extends Controller
{
    public function dashbord(){
        // chart total daftar pengguna perbulan
         $users = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("month_name"))
                    ->orderBy('id','ASC')
                    ->pluck('count', 'month_name');
        $totalUser = User::count();
        $labels = $users->keys();
        $data = $users->values();
        $admin = User::where('level','admin')->count();
        $brg_masuk = BarangMasuk::count();
        $brg_keluar = BarangKeluar::count();
       
        // barang masuk perbulan
        $masuk_jan = BarangMasuk::whereMonth('created_at','01')->count();
        $masuk_feb = BarangMasuk::whereMonth('created_at','02')->count();
        $masuk_maret = BarangMasuk::whereMonth('created_at','03')->count();
        $masuk_april = BarangMasuk::whereMonth('created_at','04')->count();
        $masuk_mei = BarangMasuk::whereMonth('created_at','05')->count();
        $masuk_juni = BarangMasuk::whereMonth('created_at','06')->count();
        $masuk_juli = BarangMasuk::whereMonth('created_at','07')->count();
        $masuk_agustus = BarangMasuk::whereMonth('created_at','08')->count();
        $masuk_september = BarangMasuk::whereMonth('created_at','09')->count();
        $masuk_oktober = BarangMasuk::whereMonth('created_at','10')->count();
        $masuk_november = BarangMasuk::whereMonth('created_at','11')->count();
        $masuk_desember = BarangMasuk::whereMonth('created_at','12')->count();

        // barang keluar perbulan
        $keluar_jan = BarangKeluar::whereMonth('created_at','01')->count();
        $keluar_feb = BarangKeluar::whereMonth('created_at','02')->count();
        $keluar_maret = BarangKeluar::whereMonth('created_at','03')->count();
        $keluar_april = BarangKeluar::whereMonth('created_at','04')->count();
        $keluar_mei = BarangKeluar::whereMonth('created_at','05')->count();
        $keluar_juni = BarangKeluar::whereMonth('created_at','06')->count();
        $keluar_juli = BarangKeluar::whereMonth('created_at','07')->count();
        $keluar_agustus = BarangKeluar::whereMonth('created_at','08')->count();
        $keluar_september = BarangKeluar::whereMonth('created_at','09')->count();
        $keluar_oktober = BarangKeluar::whereMonth('created_at','10')->count();
        $keluar_november = BarangKeluar::whereMonth('created_at','11')->count();
        $keluar_desember = BarangKeluar::whereMonth('created_at','12')->count();

        return view('layouts.admin.index',compact('labels','data','totalUser','admin','brg_masuk','brg_keluar',
        
        'masuk_jan','masuk_feb','masuk_maret','masuk_april','masuk_mei','masuk_juni','masuk_juli','masuk_agustus','masuk_september','masuk_oktober','masuk_november','masuk_desember',
        
        'keluar_jan','keluar_feb','keluar_maret','keluar_april','keluar_mei','keluar_juni','keluar_juli','keluar_agustus','keluar_september','keluar_oktober','keluar_november','keluar_desember'));
    }

    public function pagePerilaku(){

        return view('layouts.admin.PerilakuAman');
    }

    public function percapaian(){
        $data = Penghargaan::all();
        $total = Penghargaan::count();
        return view('layouts.admin.percapaian',compact('data','total'));
    }


    public function isiP3K(Request $request){
        if ($request->has('search')) {
            $datas = Lokasi::where('nama','LIKE','%'. $request->search .'%')->paginate(10);
        }else{
            $datas = Lokasi::paginate(10);
        }

        return view('layouts.admin.isip3k',compact('datas'));
    }

    public function isip3k_dept(){
        return view('layouts.admin.isip3k_dept');
    }

    public function isip3k_Detail($id){
        $lokasi = Lokasi::find($id);
        $datas =  Barang::where('lokasi_id',$id)->get();
        return view('layouts.Detail.Detail',compact('datas','lokasi'));
        
     
       
    }

    public function inputPengumuman(){
        return view('layouts.admin.inputPengumuman');
    }
    public function postPengumuman(Request $request){
       $data =  announcement::create($request->all());
       if($request->hasFile('foto')){
        $request->file('foto')->move('gambarPengumuman/',  $request->file('foto')->getClientOriginalName());
        $data->foto = $request->file('foto')->getClientOriginalName();
        $data->save();
       }
    //    dd($request->all());
       return redirect('/editPengumuman')->with('success','Data Berhasil diBuat');
    }

    public function editPengumuman(){
        $datas = announcement::latest()->paginate(5);
        return view('layouts.admin.editPengumuman',compact('datas'));
    }

    public function updatePengumuman(Request $request,$id){
     $data = announcement::find($id);
     $data->update($request->all());
     return redirect('/editPengumuman')->with('success','Data Berhasil Diupdate');
    }

    public function hapusPengumuman($id){
        $data = announcement::find($id);
        $data->delete();
        return redirect('/editPengumuman');
    }


    public function inputPenghargaan(){
        return view('layouts.admin.inputPenghargaan');
    }

    public function postPenghargaan(Request $request){  
        $request->validate([
            "keterangan" => "max:200"
        ]);

    $data = Penghargaan::create($request->all());
    if($request->hasFile('foto')){
        $request->file('foto')->move('gambarPenghargaan/',  $request->file('foto')->getClientOriginalName());
        $data->foto = $request->file('foto')->getClientOriginalName();
        $data->save();
       }
       return redirect('/editPenghargaan')->with('success','Data berhasil dibuat');
    }

    public function editPenghargaan(Request $request){
            if ($request->has('search')) {
                $datas = Penghargaan::where('judul','LIKE','%' . $request->search .'%')->paginate(5);
            }else{
                $datas = Penghargaan::latest()->paginate(5);
            }
        return view('layouts.admin.EditPenghargaan',compact('datas'));
    }

    public function updatePenghargaan(Request $request,$id){
        $data = Penghargaan::find($id);
        $data->update($request->all());
        return redirect('/editPenghargaan')->with('success','Data berhasil diupdate');
    }

    public function deletePenghargaan($id){
        $data = Penghargaan::find($id);
        $data->delete();
        return redirect('/editPenghargaan');
    }

     public function tabelPeringatanClosed(Request $request){
        // $datas = Sioktag::with('penyelesaian')->latest()->paginate(7);
        $datas = Penyelesaian::with('sioktag')->latest()->paginate(7);
       
        return view('layouts.admin.tabelPeringatanClose',compact('datas'));
    }

    public function tabelPeringatan(){
        // menampilkan semua data android
        $datas = Sioktag::latest()->paginate(7);
        return view('layouts.admin.tabelPeringatan',compact('datas'));

    }
  
}

