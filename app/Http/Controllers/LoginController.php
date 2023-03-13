<?php

namespace App\Http\Controllers;

use App\Models\User;
Use \Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        return redirect('/login')->with('error','Username/Password anda salah');
    }
    public function postRegister(Request $request){
        $request->validate([
            'password' => 'min:5'
        ]);
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "level" => $request->level,
            "password" => bcrypt($request->password),
            "remember_token" => Str::random(60),
        ]);
        // dd($request->all());
        return redirect('/dashbord')->with('success','Berhasil Menambah Pengguna');
       
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
    public function DataUser(){
        $datas = User::latest()->paginate(15);
        return view('layouts.login.daftarUser',compact('datas'));
    }

    public function resetPassword(){
        return view('layouts.login.resetPassword');
    }

    public function prosesChange(Request $request){
        
       $request->validate([
            'newPassword' => 'min:5'
        ]);
        // cek password lama
        if(!Hash::check($request->oldPassword, auth()->user()->password)){
           return back()->with('error','password saat ini Anda salah');
        }
        // cek konfirmasi password
        if($request->newPassword != $request->repeatPassword){
           return back()->with('error',' konfirmasi Password tidak sama');
        }
       
        User::whereId(auth()->user()->id)->update([
            'password' => bcrypt($request->newPassword)
        ]);
        return back()->with('success','Selamat Ganti Password Berhasil');
        
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
