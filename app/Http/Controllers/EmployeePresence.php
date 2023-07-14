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
        $masukThreshold = Carbon::parse('07:00:00'); // Waktu masuk (jam 7)
        $lateThreshold = Carbon::parse('08:00:00'); // Batas waktu terlambat (jam 8)
        $pulangThreshold = Carbon::parse('16:00:00'); // Batas waktu pulang (jam 16)
        $lemburThreshold = Carbon::parse('19:00:00'); // Waktu mulai lembur (jam 19)
        $pulangLemburThreshold = Carbon::parse('00:00:00'); // Batas waktu pulang lembur (jam 00:00)

        $userId = Auth()->user()->id; // Mendapatkan ID pengguna yang sedang login

        if ($jenis == 'Pulang') {
            // Pengecekan untuk absen pulang
            if ($now->lt($pulangThreshold) || $now->gt($pulangLemburThreshold)) {
                // Jika waktu saat ini lebih awal dari batas waktu pulang (jam 16) atau lebih dari batas waktu pulang lembur (jam 00:00)
                $errorMessage = 'Waktu absen ' . $jenis . ' belum tiba atau telah berakhir.';
                return redirect()->back()->with('error', $errorMessage);
            }

            // Cek apakah sudah ada absen masuk dan lembur sebelumnya
            $existingMasuk = Presence::where('type', 'Masuk')
                ->where('user_id', $userId)
                ->whereDate('created_at', Carbon::today())
                ->first();

            $existingLembur = Presence::where('type', 'Lembur')
                ->where('user_id', $userId)
                ->whereDate('created_at', Carbon::today())
                ->first();

            if (!$existingMasuk || !$existingLembur) {
                $errorMessage = 'Anda belum melakukan absen masuk dan lembur hari ini.';
                return redirect()->back()->with('error', $errorMessage);
            }
        } elseif ($jenis == 'Lembur') {
            // Pengecekan untuk absen lembur
            if ($now->lt($lemburThreshold)) {
                // Jika waktu saat ini lebih awal dari batas waktu lembur (jam 19)
                $errorMessage = 'Waktu absen ' . $jenis . ' belum tiba.';
                return redirect()->back()->with('error', $errorMessage);
            }

            // Cek apakah sudah ada absen masuk sebelumnya
            $existingMasuk = Presence::where('type', 'Masuk')
                ->where('user_id', $userId)
                ->whereDate('created_at', Carbon::today())
                ->first();

            if (!$existingMasuk) {
                $errorMessage = 'Anda belum melakukan absen masuk hari ini.';
                return redirect()->back()->with('error', $errorMessage);
            }
        } elseif ($jenis == 'Masuk') {
            // Pengecekan untuk absen masuk
            if ($now->lt($masukThreshold) || $now->gt($lateThreshold)) {
                // Jika waktu saat ini lebih awal dari batas waktu masuk (jam 7) atau lebih dari batas waktu terlambat (jam 8)
                $errorMessage = 'Waktu absen ' . $jenis . ' belum tiba atau telah berakhir.';
                return redirect()->back()->with('error', $errorMessage);
            }
        }

        // Cek apakah sudah ada absensi pada hari ini untuk pengguna yang sedang login
        $existingPresence = Presence::whereDate('created_at', Carbon::today())
            ->where('user_id', $userId)
            ->first();

        if ($existingPresence) {
            $errorMessage = 'Anda telah melakukan absensi hari ini.';
            return redirect()->back()->with('error', $errorMessage);
        }

        $terlambat = $jenis == 'Masuk' && $now > $lateThreshold; // Cek jika absen terlambat

        $validatedData = $request->validate([
            'type' => 'required',
            'picture' => 'required',
        ]);

        $presenceData = [
            'type' => $jenis,
            'time' => $time,
            'user_id' => $userId,
            'picture' => $request->file('picture')->store('presence', 'public'),
            'late' => $terlambat ? 1 : 0, // Set nilai kolom terlambat berdasarkan kondisi
        ];

        if ($jenis == 'Pulang Lembur') {
            // Pengecekan untuk absen pulang lembur
            $existingLembur = Presence::where('type', 'Lembur')
                ->where('user_id', $userId)
                ->whereDate('created_at', Carbon::today())
                ->first();

            if (!$existingLembur) {
                $errorMessage = 'Anda belum melakukan absen lembur hari ini.';
                return redirect()->back()->with('error', $errorMessage);
            }

            $pulangLemburThresholdToday = Carbon::today()->add($pulangLemburThreshold->diff($pulangLemburThreshold)->invert ? 1 : 0, 'day')->setTimeFromTimeString($pulangLemburThreshold->toTimeString());
            $pulangLemburThresholdToday->subMinutes(1);

            if ($now->gt($pulangLemburThresholdToday)) {
                // Jika waktu saat ini lebih dari batas waktu pulang lembur pada hari ini
                $errorMessage = 'Waktu absen ' . $jenis . ' telah berakhir.';
                return redirect()->back()->with('error', $errorMessage);
            }

            $presenceData['late'] = 0; // Set absen pulang lembur tidak terlambat
        }

        Presence::create($presenceData);

        if ($terlambat) {
            // Jika absen terlambat
            $errorMessage = 'Absen ' . $jenis . ' Terlambat';
            return redirect()->back()->with('error', $errorMessage);
        } else {
            // Jika absen tepat waktu
            $successMessage = 'Absen ' . $jenis . ' Berhasil';
            return redirect()->back()->with('success', $successMessage);
        }
    }

    
}