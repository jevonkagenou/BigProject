<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use Carbon\Carbon;
use Illuminate\Http\Request;


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
        if ($now->lt($pulangThreshold)) {
            // Jika waktu saat ini lebih awal dari batas waktu pulang (jam 16) atau lebih dari batas waktu pulang lembur (jam 00:00)
            $errorMessage = 'Waktu absen ' . $jenis . ' belum tiba atau telah berakhir.';
            return redirect()->back()->with('error', $errorMessage);
        }

        // Cek apakah sudah ada absen masuk sebelumnya
        $existingMasuk = Presence::where('type', 'Masuk')
            ->where('user_id', $userId)
            ->whereDate('created_at', Carbon::today())
            ->first();

        if (!$existingMasuk) {
            $errorMessage = 'Anda belum melakukan absen masuk.';
            return redirect()->back()->with('error', $errorMessage);
        }

        // Cek apakah sudah ada absen pulang hari ini
        $existingPulang = Presence::where('type', 'Pulang')
            ->where('user_id', $userId)
            ->whereDate('created_at', Carbon::today())
            ->first();

        if ($existingPulang) {
            $errorMessage = 'Anda sudah melakukan absen pulang hari ini.';
            return redirect()->back()->with('error', $errorMessage);
        }

        // Cek apakah sudah ada absen lembur hari ini
        $existingLembur = Presence::where('type', 'Lembur')
            ->where('user_id', $userId)
            ->whereDate('created_at', Carbon::today())
            ->first();

        if ($existingLembur) {
            // Cek apakah sudah melewati batas waktu pulang lembur (jam 00:00)
            $pulangLemburThresholdToday = Carbon::today()->setTimeFromTimeString($pulangLemburThreshold->toTimeString());
            if ($now->gt($pulangLemburThresholdToday)) {
                $errorMessage = 'Lembur berlebihan. Tidak bisa melakukan absen pulang lembur setelah jam 00:00.';
                return redirect()->back()->with('error', $errorMessage);
            }
        }

        $presenceData = [
            'type' => $jenis,
            'time' => $time,
            'user_id' => $userId,
            'picture' => $request->file('picture')->store('presence', 'public'),
            'late' => 0, // Set nilai kolom terlambat menjadi 0 untuk absen pulang
        ];

        Presence::create($presenceData);

        $successMessage = 'Absen ' . $jenis . ' Berhasil';
        return redirect()->back()->with('success', $successMessage);
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

        // Cek apakah sudah ada absen lembur hari ini
        $existingLembur = Presence::where('type', 'Lembur')
            ->where('user_id', $userId)
            ->whereDate('created_at', Carbon::today())
            ->first();

        if ($existingLembur) {
            $errorMessage = 'Anda sudah melakukan absen lembur hari ini.';
            return redirect()->back()->with('error', $errorMessage);
        }

        // Cek apakah sudah ada absen pulang lembur hari ini
        $existingPulangLembur = Presence::where('type', 'Pulang Lembur')
            ->where('user_id', $userId)
            ->whereDate('created_at', Carbon::today())
            ->first();

        if ($existingPulangLembur) {
            $errorMessage = 'Anda sudah melakukan absen pulang lembur hari ini.';
            return redirect()->back()->with('error', $errorMessage);
        }

        $presenceData = [
            'type' => $jenis,
            'time' => $time,
            'user_id' => $userId,
            'picture' => $request->file('picture')->store('presence', 'public'),
            'late' => 0, // Set nilai kolom terlambat menjadi 0 untuk absen lembur
        ];

        Presence::create($presenceData);

        $successMessage = 'Absen ' . $jenis . ' Berhasil';
        return redirect()->back()->with('success', $successMessage);
    } elseif ($jenis == 'Masuk') {
        // Pengecekan untuk absen masuk
        if ($now->gt($lateThreshold)) {
            // Jika waktu saat ini lebih dari batas waktu terlambat (jam 8)
            $presenceData = [
                'type' => $jenis,
                'time' => $time,
                'user_id' => $userId,
                'picture' => $request->file('picture')->store('presence', 'public'),
                'late' => 1, // Set nilai kolom terlambat menjadi 1 untuk absen terlambat
            ];

            Presence::create($presenceData);

            $successMessage = 'Absen ' . $jenis . ' Terlambat';
            return redirect()->back()->with('success', $successMessage);
        }

        // Cek apakah sudah ada absensi pada hari ini untuk pengguna yang sedang login
        $existingPresence = Presence::whereDate('created_at', Carbon::today())
            ->where('user_id', $userId)
            ->first();

        if ($existingPresence) {
            $errorMessage = 'Anda telah melakukan absensi hari ini.';
            return redirect()->back()->with('error', $errorMessage);
        }

        $presenceData = [
            'type' => $jenis,
            'time' => $time,
            'user_id' => $userId,
            'picture' => $request->file('picture')->store('presence', 'public'),
            'late' => 0, // Set nilai kolom terlambat menjadi 0 untuk absen tepat waktu
        ];

        Presence::create($presenceData);

        $successMessage = 'Absen ' . $jenis . ' Berhasil';
        return redirect()->back()->with('success', $successMessage);
    }
}



   
}