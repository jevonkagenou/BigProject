<?php

namespace App\Http\Controllers;

use App\Models\ClockSetting;
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
        // Mengambil pengaturan waktu presensi dari database
        $presensiSetting = ClockSetting::first();
        // Pastikan data pengaturan waktu telah ada di database
        if (!$presensiSetting) {
            // Tampilkan pesan peringatan jika data belum diatur
            $errorMessage = 'Pengaturan waktu presensi belum tersedia.';
            return redirect()->back()->with('error', $errorMessage);
        }
        $now = Carbon::now();
        // Gunakan data pengaturan waktu dari database
        $masukThreshold = Carbon::parse($presensiSetting->clock_in);
        $lateThreshold = Carbon::parse($presensiSetting->late_presence);
        $pulangThreshold = Carbon::parse($presensiSetting->home_time);  
        $lemburThreshold = Carbon::parse($presensiSetting->overtime_hours);
        $pulangLemburThreshold = Carbon::parse($presensiSetting->overtime_hours_back);

        $userId = Auth()->user()->id; // Mendapatkan ID pengguna yang sedang login

        if ($jenis == 'Masuk') {
            // Validasi apakah sudah ada presensi masuk pada hari ini untuk pengguna yang sedang login
            $existingMasuk = Presence::where('enter', 1)
                ->where('user_id', $userId)
                ->whereDate('created_at', Carbon::today())
                ->first();

            if ($existingMasuk) {
                $errorMessage = 'Anda sudah melakukan presensi masuk hari ini.';
                return redirect()->back()->with('error', $errorMessage);
            }

            // Pengecekan untuk presensi masuk
            if ($now->gt($lateThreshold)) {
                // Jika waktu saat ini lebih dari batas waktu terlambat (jam 8)
                $presenceData = [
                    'enter' => 1,
                    'go_home' => 0,
                    'overtime' => 0,
                    'home_overtime' => 0,
                    'time' => $time,
                    'user_id' => $userId,
                    'picture' => $request->file('picture')->store('presence', 'public'),
                    'late' => 1, // Set nilai kolom terlambat menjadi 1 untuk presensi terlambat
                ];

                Presence::create($presenceData);

                $successMessage = 'Presensi Masuk Terlambat';
                return redirect()->back()->with('success', $successMessage);
            }

            // Presensi tepat waktu
            $presenceData = [
                'enter' => 1,
                'go_home' => 0,
                'overtime' => 0,
                'home_overtime' => 0,
                'time' => $time,
                'user_id' => $userId,
                'picture' => $request->file('picture')->store('presence', 'public'),
                'late' => 0, // Set nilai kolom terlambat menjadi 0 untuk presensi tepat waktu
            ];

            Presence::create($presenceData);

            $successMessage = 'Presensi Masuk Berhasil';
            return redirect()->back()->with('success', $successMessage);
        } elseif ($jenis == 'Pulang') {
            // Pengecekan untuk presensi pulang
            if ($now < $pulangThreshold) {
                // Jika waktu saat ini lebih awal dari batas waktu pulang (jam 16) atau lebih dari batas waktu pulang lembur (jam 00:00)
                $errorMessage = 'Presensi pulang belum tersedia sekarang.';
                return redirect()->back()->with('error', $errorMessage);
            }

            // Cek apakah sudah ada presensi masuk sebelumnya
            $existingMasuk = Presence::where('enter', 1)
                ->where('user_id', $userId)
                ->whereDate('created_at', Carbon::today())
                ->first();

            if (!$existingMasuk) {
                $errorMessage = 'Anda belum melakukan presensi masuk.';
                return redirect()->back()->with('error', $errorMessage);
            }

            // Cek apakah sudah ada presensi pulang hari ini
            $existingPulang = Presence::where('go_home', 1)
                ->where('user_id', $userId)
                ->whereDate('created_at', Carbon::today())
                ->first();

            if ($existingPulang) {
                $errorMessage = 'Anda sudah melakukan presensi pulang hari ini.';
                return redirect()->back()->with('error', $errorMessage);
            }

            // Cek apakah sudah ada presensi lembur hari ini
            $existingLembur = Presence::where('overtime', 1)
                ->where('user_id', $userId)
                ->whereDate('created_at', Carbon::today())
                ->first();

            if ($existingLembur) {
                // Cek apakah sudah melewati batas waktu pulang lembur (jam 00:00)
                $pulangLemburThresholdToday = Carbon::today()->setTimeFromTimeString($pulangLemburThreshold->toTimeString());
                if ($now->gt($pulangLemburThresholdToday)) {
                    $errorMessage = 'Lembur berlebihan. Tidak bisa melakukan presensi pulang lembur setelah jam 00:00.';
                    return redirect()->back()->with('error', $errorMessage);
                }
            }

            $presenceData = [
                'enter' => 0,
                'go_home' => 1,
                'overtime' => 0,
                'home_overtime' => 0,
                'time' => $time,
                'user_id' => $userId,
                'picture' => $request->file('picture')->store('presence', 'public'),
                'late' => 0, // Set nilai kolom terlambat menjadi 0 untuk presensi pulang
            ];

            Presence::create($presenceData);

            $successMessage = 'Presensi ' . $jenis . ' Berhasil';
            return redirect()->back()->with('success', $successMessage);
        } elseif ($jenis == 'Lembur') {
            // Pengecekan untuk presensi lembur
            if ($now < $lemburThreshold) {
                // Jika waktu saat ini lebih awal dari batas waktu lembur (jam 19) atau lebih dari batas waktu pulang lembur (jam 00:00)
                $errorMessage = 'Presensi lembur belum tersedia sekarang.';
                return redirect()->back()->with('error', $errorMessage);
            }

            // Cek apakah sudah ada presensi masuk sebelumnya
            $existingMasuk = Presence::where('enter', 1)
                ->where('user_id', $userId)
                ->whereDate('created_at', Carbon::today())
                ->first();

            if (!$existingMasuk) {
                $errorMessage = 'Anda belum melakukan presensi masuk.';
                return redirect()->back()->with('error', $errorMessage);
            }

            // Cek apakah sudah ada presensi lembur hari ini
            $existingLembur = Presence::where('overtime', 1)
                ->where('user_id', $userId)
                ->whereDate('created_at', Carbon::today())
                ->first();

            if ($existingLembur) {
                $errorMessage = 'Anda sudah melakukan presensi lembur hari ini.';
                return redirect()->back()->with('error', $errorMessage);
            }

            $presenceData = [
                'enter' => 0,
                'go_home' => 0,
                'overtime' => 1,
                'home_overtime' => 0,
                'time' => $time,
                'user_id' => $userId,
                'picture' => $request->file('picture')->store('presence', 'public'),
                'late' => 0, // Set nilai kolom terlambat menjadi 0 untuk presensi lembur
            ];

            Presence::create($presenceData);

            $successMessage = 'Presensi ' . $jenis . ' Berhasil';
            return redirect()->back()->with('success', $successMessage);
        } elseif ($jenis == 'Pulang Lembur') {
            // Pengecekan untuk presensi pulang lembur
            if ($now < $pulangLemburThreshold) {
                // Jika waktu saat ini lebih dari batas waktu pulang lembur (jam 00:00)
                $errorMessage = 'Presensi pulang lembur belum tersedia sekarang.';
                return redirect()->back()->with('error', $errorMessage);
            }

            // Cek apakah sudah ada presensi masuk sebelumnya
            $existingMasuk = Presence::where('enter', 1)
                ->where('user_id', $userId)
                ->whereDate('created_at', Carbon::today())
                ->first();

            if (!$existingMasuk) {
                $errorMessage = 'Anda belum melakukan presensi masuk.';
                return redirect()->back()->with('error', $errorMessage);
            }

            // Cek apakah sudah ada presensi pulang hari ini
            $existingPulang = Presence::where('go_home', 1)
                ->where('user_id', $userId)
                ->whereDate('created_at', Carbon::today())
                ->first();

            if (!$existingPulang) {
                $errorMessage = 'Anda belum melakukan presensi pulang.';
                return redirect()->back()->with('error', $errorMessage);
            }

            // Cek apakah sudah ada presensi pulang lembur hari ini
            $existingPulangLembur = Presence::where('home_overtime', 1)
                ->where('user_id', $userId)
                ->whereDate('created_at', Carbon::today())
                ->first();

            if ($existingPulangLembur) {
                $errorMessage = 'Anda sudah melakukan presensi pulang lembur hari ini.';
                return redirect()->back()->with('error', $errorMessage);
            }

            $presenceData = [
                'enter' => 0,
                'go_home' => 0,
                'overtime' => 0,
                'home_overtime' => 1,
                'time' => $time,
                'user_id' => $userId,
                'picture' => $request->file('picture')->store('presence', 'public'),
                'late' => 0, // Set presensi pulang lembur tidak terlambat
            ];

            Presence::create($presenceData);

            $successMessage = 'Presensi ' . $jenis . ' Berhasil';
            return redirect()->back()->with('success', $successMessage);
        }

        // Menampilkan pesan peringatan jika akses presensi di luar waktu yang ditentukan
        $errorMessage = 'Waktu presensi ' . $jenis . ' belum tiba atau telah berakhir.';
        return redirect()->back()->with('error', $errorMessage);
    }
}