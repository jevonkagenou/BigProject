<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class LoginController extends Controller
{
    public function login(){
        return view('Login.Login1');
    }
    public function loginuser(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Gunakan fungsi hasRole untuk memeriksa role pengguna
            if ($user->hasRole('Admin')) {
                return redirect()->route('DashboardAdmin');
            } elseif ($user->hasRole('Karyawan')) {
                return redirect()->route('DashboardEmployee');
            }
        }

        return redirect()->route('login')->with('error', 'Email Atau Password Yang Anda Masukkan Salah');
    }
    public function logout(Request $request)
    {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
    }
}
