<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    
    public function index(){
        return view('layouts.BrgKeluar.inputPemakaian');
    }
}
