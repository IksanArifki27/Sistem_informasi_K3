<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use \Carbon\Carbon;

class AdminController extends Controller
{
    public function dashbord(){
        // $date = Carbon::now();
        return view('layouts.admin.index',);
    }
}
