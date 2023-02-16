<?php

namespace App\Http\Controllers;

use App\Models\announcement;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index (Request $request){
    $datas = announcement::all();
    return view('layouts.Guest.index',compact('datas'));
    }
}
