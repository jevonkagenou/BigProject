<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EmployeePresence extends Controller
{
    public function presence(Request $request, $jenis)
    {

        $validatedData = $request->validate([
            'type' => 'required',
            'picture' => 'required',
        ]);

        Presence::create([
            'type' => $jenis,
            'user_id' => Auth()->user()->id,
            'picture' => $request->file('picture')->store('presence','public')
        ]);

        return redirect()->back()->with('success', 'Absen Berhasil');
    
        // Redirect atau melakukan tindakan lainnya setelah penyimpanan data
    }
}
