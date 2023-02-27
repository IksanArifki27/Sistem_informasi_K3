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
        $brg_msk = BarangMasuk::with('barang')->get();
        
      
        return view('layouts.BrgMasuk.tambahStok',compact('brg_msk','barang'));
    }

    public function ajax(){
        
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
}
