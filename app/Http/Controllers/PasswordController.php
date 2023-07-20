<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function setPassword(User $user){
        return view('email.InvitationLink', compact('user'));
    }

    public function updatePassword(Request $request, User $user){
        $invitationData = $request->validate([
            'password' => 'required|min:8|confirmed'
        ]);

        $user->password = Hash::make($request->password);
        $user->email_verified_at = now();
        $user->save();

            return redirect('login')->with('success', 'Password Berhasil Diatur, silahkan Login');
    }
}
