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

    public function formTambahStok(Request $request){
        // $lokasi = Lokasi::all();
        $lokasi = Lokasi::all();
        $barang = Barang::all();
        return view('layouts.BrgMasuk.tambahStok',compact('barang','lokasi'));
    }
    
}
