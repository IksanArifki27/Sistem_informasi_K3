<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    
    public function index(){
         $lokasi = Lokasi::all();
        return view('layouts.BrgKeluar.inputPemakaian',compact('lokasi'));
    }

    public function recordKeluar(){
        $brg_klr = BarangKeluar::latest()->with('barang','lokasi')->paginate(10);
        return view('layouts.BrgKeluar.TabelObatKeluar',compact('brg_klr'));
    }

    public function LokasiBarangKeluarId($id){
        $data = Barang::where('lokasi_id',$id)->get();
        return response()->json($data);
        // dd($data);
    }
    public function postKeluarStok(Request $request){
        BarangKeluar::create($request->all());

        $barang = Barang::find($request->barang_id);

        if ($barang->stok < $request->jumlah_barang_keluar) {
            return redirect('/inputPemakaian')->with('error','Jumlah Barang Melelbihi Stok');
        }else{
            $barang->stok -= $request->jumlah_barang_keluar;
            $barang->save();
            return redirect('/inputPemakaian')->with('success','Berhasil Mengambil Barang' );
        }

    }
}
