<?php

namespace App\Http\Controllers;

use App\Models\komppotong;
use App\Models\kompdapat;
use App\Models\DataPayroll;
use Illuminate\Http\Request;

class SummaryofComponentSalaryController extends Controller
{
    public function SummaryofComponentSalary()
    {
        $slipGajiIds = DataPayroll::pluck('slip_gaji_id');

        $totalsPerSlipGaji = [];
        $tabel1 = DataPayroll::all();
        $tabel2 = kompdapat::all();
        $tabel3 = komppotong::all();
        $tabel = kompdapat::whereIn('nama_id', $slipGajiIds)->get();
        $totalGaji = 0;
        $totalPendapatan = 0;
        $totalPemotongan = 0;

        foreach ($slipGajiIds as $slipGajiId) {
            // Ambil data kompdapat dan komppotong berdasarkan slip_gaji_id saat ini
            $tabelKompdapat = kompdapat::where('nama_id', $slipGajiId)->get();
            $tabelKompotong = komppotong::where('nama_id', $slipGajiId)->get();

            // komponen pendapatan
            // komponen pendapatan
            $totalPendapatan = $tabelKompdapat->sum('uang_dapat', $slipGajiId);

            // komponen pemotongan
            $totalPemotongan = $tabelKompotong->sum('uang_potong', $slipGajiId);

            // Hitung
            $totalGaji = $totalPendapatan - $totalPemotongan;

            $totalsPerSlipGaji[$slipGajiId] = $totalGaji;
        }
        // dd($totalPendapatan, $totalPemotongan, $totalGaji);
        return view('Admin.SummaryofComponentSalary', compact('tabel1', 'tabel2', 'tabel3','totalGaji','totalsPerSlipGaji', 'totalPemotongan', 'totalPendapatan'), [
            'tittle' => 'Ringkasan Gaji Perkomponen',
        ]);

    }
}
