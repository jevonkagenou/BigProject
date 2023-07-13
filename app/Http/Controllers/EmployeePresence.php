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

        $now = Carbon::now();
        $lateThreshold = Carbon::parse('08:00:00'); // Batas waktu terlambat (jam 8)

        if ($now->lt(Carbon::parse('07:00:00')) || $now->gt($lateThreshold)) {
            $errorMessage = 'Waktu absen ' . $jenis . ' telah berakhir.';
            return redirect()->back()->with('error', $errorMessage);
        }

        $terlambat = $jenis == 'Masuk' && $now > Carbon::parse('08:00:00'); // Cek jika absen terlambat

        $validatedData = $request->validate([
            'type' => 'required',
            'picture' => 'required',
        ]);

        // Cek apakah sudah ada absensi pada hari ini untuk pengguna yang sedang login
        $existingPresence = Presence::whereDate('created_at', Carbon::today())
            ->where('user_id', Auth()->user()->id)
            ->first();

        if ($existingPresence) {
            $errorMessage = 'Anda telah melakukan absensi hari ini.';
            return redirect()->back()->with('error', $errorMessage);
        }

        Presence::create([
            'type' => $jenis,
            'time' => $time,
            'user_id' => Auth()->user()->id,
            'picture' => $request->file('picture')->store('presence', 'public'),
            'late' => $terlambat ? 1 : 0, // Set nilai kolom terlambat berdasarkan kondisi
        ]);

        if ($terlambat) {
            $errorMessage = 'Absen ' . $jenis . ' Terlambat';
            return redirect()->back()->with('error', $errorMessage);
        } else {
            $successMessage = 'Absen ' . $jenis . ' Berhasil';
            return redirect()->back()->with('success', $successMessage);
        }
    }




    // public function presences(Request $request, $jenis)
    // {
    //     $time = $request->date ? date("Y-m-d H:i", strtotime(str_replace('/', '-', $request->time))) : date("Y-m-d H:i");

    //     $now = Carbon::now();
    //     $lateThreshold = Carbon::parse('08:00:00'); // Batas waktu terlambat

    //     $terlambat = $jenis == 'Masuk' && $now > $lateThreshold; // Cek jika absen terlambat

    //     $validatedData = $request->validate([
    //         'type' => 'required',
    //         'picture' => 'required',
    //     ]);

    //     Presence::create([
    //         'type' => $jenis,
    //         'time' => $time,
    //         'user_id' => Auth()->user()->id,
    //         'picture' => $request->file('picture')->store('presence', 'public'),
    //         'late' => $terlambat ? 1 : 0, // Set nilai kolom terlambat berdasarkan kondisi
    //     ]);

    //     if ($terlambat) {
    //         // Tampilkan pesan peringatan sebagai alert di halaman
    //         $request->session()->flash('alert', 'Absen Terlambat');
    //     }

    //     $successMessage = 'Absen ' . $jenis . ' Berhasil';
    //     return redirect()->back()->with('success', $successMessage);
    // }

    // public function presence(Request $request, $jenis)
    // {
    //     $time = $request->date ? date("Y-m-d H:i", strtotime(str_replace('/', '-', $request->time))) : date("Y-m-d H:i");

    //     // Cek jadwal absen masuk, pulang, lembur, dan pulang lembur
    //     $now = Carbon::now();
    //     $lateThreshold = Carbon::parse('08:00:00'); // Batas akhir absen masuk (08:00 AM)

    //     if ($jenis == 'Masuk' && $now > $lateThreshold) {
    //         // Simpan pesan peringatan sebagai Flash Data
    //         $request->session()->flash('lateAttendance', 'Anda terlambat dalam melakukan absen masuk.');
    //     }

    //     $validatedData = $request->validate([
    //         'type' => 'required',
    //         'picture' => 'required',
    //     ]);

    //     Presence::create([
    //         'type' => $jenis,
    //         'time' => $time,
    //         'user_id' => Auth()->user()->id,
    //         'picture' => $request->file('picture')->store('presence', 'public')
    //     ]);

    //     $successMessage = 'Absen ' . $jenis . ' Berhasil';
    //     return redirect()->back()->with('success', $successMessage);
        
    //     // Redirect atau melakukan tindakan lainnya setelah penyimpanan data
    // }

}
