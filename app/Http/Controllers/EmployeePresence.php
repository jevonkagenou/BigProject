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
        $time = $request->date ? date("Y-m-d H:i", strtotime(str_replace('/', '-', $request->time))) : date("Y-m-d H:i");

        // Cek apakah jenis presensi sudah diisi pada hari ini
        $alreadyFilled = Presence::where('user_id', Auth()->user()->id)
                                ->where('type', $jenis)
                                ->whereDate('time', date('Y-m-d'))
                                ->exists();

        if ($alreadyFilled) {
            return redirect()->back()->with('error', 'Anda sudah mengisi presensi ' . $jenis . ' hari ini.');
        }

        $validatedData = $request->validate([
            'type' => 'required',
            'picture' => 'required',
        ]);

        Presence::create([
            'type' => $jenis,
            'time' => $time,
            'user_id' => Auth()->user()->id,
            'picture' => $request->file('picture')->store('presence', 'public')
        ]);

        $successMessage = 'Absen ' . $jenis . ' Berhasil';
        return redirect()->back()->with('success', $successMessage);
        
        // Redirect atau melakukan tindakan lainnya setelah penyimpanan data
    }


}
