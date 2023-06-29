<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    
    public function index(){
        // menampilkan semua lokasi
         $lokasi = Lokasi::all();
        return view('layouts.BrgKeluar.inputPemakaian',compact('lokasi'));
    }

    public function recordKeluar(){
        // menampilkan 
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
    // record filter keluar
    public function filterKeluar (Request $request){
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $brg_klr = BarangKeluar::whereDate('created_at','>=',$start_date)
            ->whereDate('created_at','<=',$end_date)->get();
        return view('layouts.BrgKeluar.TabelObatKeluar',compact('brg_klr'));
    }
}
