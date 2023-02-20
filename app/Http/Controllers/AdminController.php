<?php

namespace App\Http\Controllers;

use App\Models\announcement;
use Illuminate\Http\Request;
Use \Carbon\Carbon;

use function GuzzleHttp\Promise\all;

class AdminController extends Controller
{
    public function dashbord(){
        // $date = Carbon::now();
        return view('layouts.admin.index',);
    }

    public function pagePerilaku(){
        return view('layouts.admin.PerilakuAman');
    }

    public function percapaian(){
        return view('layouts.admin.percapaian');
    }

    public function diagram(){
        return view('layouts.admin.diagram');
    }

    public function isiP3K(){
        return view('layouts.admin.isip3k');
    }

    public function isip3k_dept(){
        return view('layouts.admin.isip3k_dept');
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
       return redirect('/editPengumuman');
    }

    public function editPengumuman(){
        $datas = announcement::latest()->paginate(5);
        return view('layouts.admin.editPengumuman',compact('datas'));
    }

    public function updatePengumuman(Request $request,$id){
     $data = announcement::find($id);
     $data->update($request->all());
     return redirect('/editPengumuman');
    }

    public function hapusPengumuman($id){
        $data = announcement::find($id);
        $data->delete();
        return redirect('/editPengumuman');
    }
    public function inputPemakaian(){
        return view('layouts.admin.inputPemakaian');
    }

    public function inputPenghargaan(){
        return view('layouts.admin.inputPenghargaan');
    }
}
