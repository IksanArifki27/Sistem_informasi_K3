<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    //

    
    public function index(){
        $brg_msk = BarangMasuk::latest()->with('barang','lokasi')->paginate(10);
        return view('layouts.BrgMasuk.TabelObatMasuk',compact('brg_msk'));
    }


    public function formTambahStok(){
        $lokasi = Lokasi::all();
        return view('layouts.BrgMasuk.tambahStok',compact('lokasi'));
        
       
    }
    
    public function LokasiBarangId($id){
        $data = Barang::where('lokasi_id',$id)->get();
        return response()->json($data);
        
    }

    public function postStok(Request $request){
        BarangMasuk::create($request->all());

        $barang = Barang::findOrFail($request->barang_id);
        $barang->stok += $request->jumlah_barang_masuk;
        $barang->save();
        return redirect('/formTambah')->with('success','Tambah Stok Berhasil');
        // dd($barang);
    }
    public function filterMasuk (Request $request){
        $start_date = $request->start_date;
        $end_date = $request->end_date;
         $brg_msk = BarangMasuk::whereDate('created_at','>=',$start_date)
            ->whereDate('created_at','<=',$end_date)->get();
         return view('layouts.BrgMasuk.TabelObatMasuk',compact('brg_msk'));

    }
}
