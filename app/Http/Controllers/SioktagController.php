<?php

namespace App\Http\Controllers;

use App\Models\Sioktag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class SioktagController extends Controller
{
    public function index(){
        $data = Sioktag::all();
        return response()->json([
            'data' => $data
        ]);
    }

    public function postData(Request $request){
       $request->validate([
        "nama" => 'required',
        "foto" => 'required',
        "lokasi" => 'required',
        "keterangan" => 'required'
       ]);

       $data =  Sioktag::create($request->all());
       if($request->hasFile('foto')){
        $request->file('foto')->move('imgMobileSioktag/',  $request->file('foto')->getClientOriginalName());
        $data->foto = $request->file('foto')->getClientOriginalName();
        $data->save();

        return response()->json([
            "msg" => "Data berhasil ditambah",
            "data" => $data
        ]);
       }
    }

    public function showId($id){
        $data = Sioktag::find($id);
        return response()->json([
           "data" => $data
        ]);
    }

    public function updateData(Request $request,$id){
        $data = Sioktag::find($id);
        $data->update($request->all());
        
        return response()->json([
            "msg" => "Data berhasil diUpdate",
            "data" => $data
        ]);

    }

    public function deleteData($id){
        $data = Sioktag::find($id);
        $data->delete();

        return response()->json([
            "msg" => "Data berhasil Dihapus"
        ]);
    }
    
}
