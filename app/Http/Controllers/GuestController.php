<?php

namespace App\Http\Controllers;

use App\Models\announcement;
use App\Models\Penghargaan;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index (Request $request){
    $penghargaans = Penghargaan::latest()->get();
    $datas = announcement::latest()->get();
    return view('layouts.Guest.index',compact('datas','penghargaans'));
    }

    public function detailPengumuman($id){
        $data = announcement::find($id);
        return view('layouts.Guest.detail_info',compact('data'));
    }

    public function kotakp3k(){
        return view('layouts.Guest.kotakp3k');
    }


}
