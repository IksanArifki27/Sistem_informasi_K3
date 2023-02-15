<?php

namespace App\Http\Controllers;

use App\Models\User;
Use \Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Login(){
        return view('layouts.login.login');
    }
    public function postLogin(Request $request){
    //    dd($request->all());
         if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashbord');
        }
        return redirect('/login');
    }
    public function postRegister(Request $request){
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "remember_token" => Str::random(60),
        ]);
        // dd($request->all());
        return redirect('/login');
    }
    function authenticated(Request $request, $user)
{
    $user->update([
        'last_login' => Carbon::now()->toDateTimeString(),
    ]);
}

    public function register(){
        return view('layouts.login.register');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
