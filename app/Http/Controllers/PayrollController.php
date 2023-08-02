<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Payroll;
use App\Models\DataPayroll;
use App\Models\Presence;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PayrollController extends Controller
{
    // public function Payroll(Request $request)
    // {        
    //     $payrolls = Payroll::with('dataPayroll', 'kompdapat')->get();

    //     // Ambil data lembur dari database dengan rentang waktu yang diinginkan (jam 19:00 hingga 00:00) pada bulan tertentu
    //     $data = Presence::when($request->created_at, function ($query) use ($request) {
    //                     $query->whereMonth('time', $request->created_at);
    //                 })
    //                 ->selectRaw('user_id, SUM(TIME_TO_SEC(TIMEDIFF(home_overtime, overtime))) as total_overtime_seconds')
    //                 ->groupBy('user_id')
    //                 ->get();

    //     // Hitung total jam lembur selama sebulan dan total gaji lembur selama sebulan
    //     foreach ($data as $entry) {
    //         // Konversi total detik lembur menjadi jam
    //         $totalOvertimeSeconds = $entry->total_overtime_seconds;
    //         $totalOvertimeHours = floor($totalOvertimeSeconds / 3600);

    //         // Hitung jumlah detik lembur setelah jam 00:00
    //         $remainingSeconds = $totalOvertimeSeconds % 3600;
    //         $totalOvertimeAfterMidnight = ceil($remainingSeconds / 3600);

    //         // Hitung gaji lembur perjam dari tabel Presence
    //         $hourlyWage = $entry->wages_per_hour;

    //         // Hitung total gaji lembur per karyawan selama sebulan
    //         $entry->total_overtime_pay = ($totalOvertimeHours + $totalOvertimeAfterMidnight) * $hourlyWage;

    //         // Tambahkan kode di bawah ini untuk menyimpan label status berdasarkan nilai status yang ada pada tabel Payroll
    //         $statuses = [
    //             'Belum Siap' => 'btnradio14',
    //             'Siap Bayar' => 'btnradio15',
    //             'Sudah Bayar' => 'btnradio16'
    //             // Tambahkan status lainnya sesuai kebutuhan Anda
    //         ];
    //         $entry->status_label = $statuses[$entry->status] ?? 'Tidak Diketahui';
    //     }
    //     // dd($data);
    //     return view('Admin.Payroll', compact('payrolls', 'data'));
    // }
    public function Payroll(Request $request, $month = null, $year = null)
    {        
        $payroll = Payroll::with('dataPayroll','kompdapat')->get();       

        // Jika bulan dan tahun tidak disediakan, gunakan bulan dan tahun saat ini
        if ($month === null) {
            $month = date('n');
        }
        if ($year === null) {
            $year = date('Y');
        }
    
        // Ambil data presence berdasarkan periode bulan dan tahun tertentu
        $data = Presence::whereMonth('created_at', $month)
        ->whereYear('created_at', $year)
        ->whereBetween(\App\Models\Presence::raw('TIME(created_at)'), ['19:00:00', '23:59:59'])
        ->groupBy('user_id','time')
        ->get();
    
        // dd($data);
        $totalGajiLembur = [];
        $gajiTotal = []; // Total gaji lembur per karyawan
    
        foreach ($data as $presence) {
            $date = \Carbon\Carbon::parse($presence->time)->toDateString();
        
            // Pastikan presence memiliki relasi dengan user (misalnya, menggunakan 'user_id' sebagai kunci relasi)
            if (!isset($totalGajiLembur[$date][$presence->user_id])) {
                $totalGajiLembur[$date][$presence->user_id] = 0;
            }
        
            // Hitung selisih waktu lembur dalam jam
            $startTime = \Carbon\Carbon::parse($presence->time);
            $endTime = \Carbon\Carbon::parse($presence->time)->setTime(23, 59, 59);
            $hoursWorked = $endTime->diffInHours($startTime);
        
            // Total gaji lembur per karyawan
            $totalGajiLembur[$date][$presence->user_id] += $presence->wages_per_hour * $hoursWorked;
        }

        // Menghitung total gaji lembur per karyawan dari setiap tanggal
        foreach ($totalGajiLembur as $date => $userTotals) {
            foreach ($userTotals as $userId => $totalGaji) {
                // Pastikan variabel total gaji lembur per karyawan sudah ada
                if (!isset($gajiTotal[$userId])) {
                    $gajiTotal[$userId] = 0;
                }

                // Tambahkan total gaji lembur per karyawan dari tanggal (hari) tertentu
                $gajiTotal[$userId] += $totalGaji;
            }
        }
        // dd($gajiTotal);
        foreach ($gajiTotal as $userId => $value) {
            $user = \App\Models\User::find($userId); // Ganti 'User' dengan model user Anda
        
           $keseluruhanGajiLembur = $user->user_id . $value;
        }
        // dd($keseluruhanGajiLembur);
        // dd($gajiTotal);
        // foreach ($totalGajiLembur as $totalGaji) {
        //     foreach ($totalGaji as $Gaji) {
        //         $gajiTotal += $Gaji;              
        //     }           
        // }

        $payrolls = Payroll::when($request->created_at,function($query) use ($request){
                $query->whereMonth('created_at', $request->created_at);
            })
            ->get();
        $statuses = [
                'Belum Siap' => 'btnradio14',
                'Siap Bayar' => 'btnradio15',
                'Sudah Bayar' => 'btnradio16'
            ];

        foreach ($payrolls as $datapayroll) {
            $datapayroll->status_label = $statuses[$datapayroll->status];
        }

        return view('Admin.Payroll', compact('payrolls','payroll','data','gajiTotal', 'keseluruhanGajiLembur'));
    }
        
    // public function Payroll($month = null, $year = null)
    // {
    //     $payroll = Payroll::with('dataPayroll','kompdapat')->get();       

    //     // Jika bulan dan tahun tidak disediakan, gunakan bulan dan tahun saat ini
    //     if ($month === null) {
    //         $month = date('n');
    //     }
    //     if ($year === null) {
    //         $year = date('Y');
    //     }
    
    //     // Ambil data presence berdasarkan periode bulan dan tahun tertentu
    //     $presenceData = Presence::whereMonth('created_at', $month)
    //     ->whereYear('created_at', $year)
    //     ->whereBetween(\App\Models\Presence::raw('TIME(created_at)'), ['19:00:00', '23:59:59'])
    //     ->get();
    
    //     $totalGajiLembur = [];
    
    //     foreach ($presenceData as $presence) {
    //         // Hitung selisih waktu lembur dalam jam
    //         $startTime = \Carbon\Carbon::parse($presence->created_at);
    //         $endTime = \Carbon\Carbon::parse($presence->created_at)->setTime(23, 59, 59);
    //         $hoursWorked = $endTime->diffInHours($startTime);
        
    //         // Pastikan presence memiliki relasi dengan user (misalnya, menggunakan 'user_id' sebagai kunci relasi)
    //         if (!isset($totalGajiLembur[$presence->user_id])) {
    //             $totalGajiLembur[$presence->user_id] = 0;
    //         }
        
    //         // Total gaji lembur per karyawan
    //         $totalGajiLembur[$presence->user_id] += $presence->wages * $hoursWorked;
    //     }
    
    //             // Anda sekarang memiliki array $totalGajiLembur yang berisi total gaji lembur per user
    //     // Anda dapat menampilkan hasilnya sesuai kebutuhan
    //     foreach ($totalGajiLembur as $userId => $totalGaji) {
    //         $user = \App\Models\User::find($userId); // Ganti 'User' dengan model user Anda

    //         echo 'User: ' . $user->name . ', Total Gaji Lembur: ' . $totalGaji . '<br>';
    //     }
    // }



    public function UpdatePayrollStatus(Request $request)
    {
        $payrollId = $request->input('payrollId');
        $newStatus = $request->input('newStatus');

        $payroll = Payroll::find($payrollId);

        if (!$payroll) {
            return response()->json(['message' => 'Data payroll tidak ditemukan'], 404);
        }

        $dataPayroll = DataPayroll::where('payroll_id', $payrollId)->first();

        if (!$dataPayroll) {
            return response()->json(['message' => 'Data payroll tidak ditemukan'], 404);
        }

        $payroll->status = $newStatus;
        $payroll->save();

        $dataPayroll->status = $newStatus;
        $dataPayroll->save();

        return response()->json(['message' => 'Status payroll berhasil diperbarui'], 200);
    }
}
