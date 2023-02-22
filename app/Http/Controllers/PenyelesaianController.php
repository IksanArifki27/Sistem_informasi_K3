<?php

namespace App\Http\Controllers;

use App\Models\Penyelesaian;
use Illuminate\Http\Request;

class PenyelesaianController extends Controller
{
    //

    public function index(){
        $data = Penyelesaian::with('sioktag')->get();
        return response()->json([
            "data" => $data
        ]);
    }

    public function postPenyelesaian(Request $request){
        $data = Penyelesaian::create($request->all());
        if($request->hasFile('keterangan')){
            $request->file('keterangan')->move('fotoKeterangan/', $request->file('keterangan')->getClientOriginalName());
            $data->keterangan = $request->file('keterangan')->getClientOriginalName();
            $data->save();
        }
        return response()->json([
            "msg" => "Data berhasil ditambah",
            "data" => $data
         ]);
    }

    public function ShowDataId ($id){
        $data = Penyelesaian::find($id);
        return response()->json([
            "data" => $data
        ]);
    }
}
