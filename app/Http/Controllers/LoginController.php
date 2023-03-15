<?php

namespace App\Http\Controllers;

use App\Models\User;
Use \Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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

    public function forgotPassword(){
        return view('layouts.login.forgotPassword');
    }

    public function changePassword($token){
        return view('layouts.login.ChangePassword',['token' => $token]);
    }

    public function postForgotPassword(Request $request){
        // $request->validate([
        //     'email' => 'required|email|exist:users'
        // ]);
        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->input('email'),
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        Mail::send('layouts.login.MailViews',['token' => $token],function($message) use($request) {
            $message->to($request->input('email'));
            $message->subject('Reset Password');
        });

        return back()->with('success','Berhasil Mengirim email link reset password cek Email anda ');
    }

 

    public function postChangePassword(Request $request){
        $request->validate([
            'newPassword' => 'required|min:5',
            'confirmPassword' => 'required',
        ]);

        $reset_password = DB::table('password_resets')
        ->where('email', $request->input('email'))
        ->where('token', $request->token)
        ->first();

        if (!$reset_password) {
           back()->with('error','Invalid Token!');
        }
        User::where('email', $request->input('email'))
        ->update(['password' => bcrypt($request->input('newPassword'))]);
        //  User::whereId(auth()->user()->id)->update([
        //     'password' => bcrypt($request->newPassword)
        // ]);

        DB::table('password_resets')
        ->where('email', $request->input('email'))
        ->delete();

        return redirect('/login')->with('success','Password anda berhasil diganti!');
    }
    
 

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
