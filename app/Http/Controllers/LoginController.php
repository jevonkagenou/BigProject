<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('Login.Login1');
    }
    public function loginuser(Request $request){
        $credentials = $request->only('email', 'password');
        // return redirect()->route('DashboardAdmin');
        if (Auth::attempt($credentials)){
            // Authentication passed...
            $user = Auth::user();
            if($user->role === "admin"){
                return redirect()->route('DashboardAdmin');
            }elseif($user->role === "karyawan"){
                return redirect()->route('DashboardEmployee');

            }
        }
        return redirect()->route('Login')->with(
            'error' ,'Email Atau Password Yang Anda Masukkan Salah',
        );
    }
    public function logout(Request $request)
    {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/landing-page');
    }
}
