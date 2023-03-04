<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;
use App\Models\Lokasi;
use App\Models\Sioktag;
use App\Models\Departemen;
use App\Models\Penghargaan;
use App\Models\announcement;
use App\Models\Penyelesaian;
use Illuminate\Http\Request;
Use \Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;

class AdminController extends Controller
{
    public function dashbord(){
         $users = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("month_name"))
                    ->orderBy('id','ASC')
                    ->pluck('count', 'month_name');
        $totalUser = User::count();
        $labels = $users->keys();
        $data = $users->values();
        $admin = User::where('level','admin')->count();
      
        return view('layouts.admin.index',compact('labels','data','totalUser','admin'));
    }

    public function pagePerilaku(){
        return view('layouts.admin.PerilakuAman');
    }

    public function percapaian(){
        $data = Penghargaan::all();
        return view('layouts.admin.percapaian',compact('data'));
    }

    public function diagram(){
       $users = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("month_name"))
                    ->orderBy('id','ASC')
                    ->pluck('count', 'month_name');
 
        $labels = $users->keys();
        $data = $users->values();
        return view('layouts.admin.diagram',compact('labels','data'));
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
        $datas = Sioktag::paginate(7);
        return view('layouts.admin.tabelPeringatan',compact('datas'));

    }
  
}

