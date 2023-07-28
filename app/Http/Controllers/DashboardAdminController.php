<?php

namespace App\Http\Controllers;
use App\Models\PermitEmployee;
use App\Models\Presence;
use App\Models\DataPayroll;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function DashboardAdmin()
    {   
        $admin = User::all();
        $today = Carbon::today();
        $tomorrow = Carbon::tomorrow();

        // Data presensi terlambat berdasarkan hari ini
        $late = Presence::whereDate('created_at', Carbon::today())
                    ->latest('created_at')
                    ->get();

        // Data izin & cuti berdasarkan hari ini
        $data = PermitEmployee::whereDate('start_date', '<=' , $tomorrow)
                    ->whereDate('date_leave', '>=', $today)
                    ->latest('created_at')
                    ->limit(5)
                    ->get();

        $belumbayar = DataPayroll::where('status', 'Belum Siap')->count();
        $bayar = DataPayroll::where('status', 'Sudah Bayar')->count();

        return view('DashboardAdmin.DashboardAdmin', compact('data', 'belumbayar', 'bayar', 'late', 'admin'), [
            'title' => 'Beranda'
        ]);
    }
    // public function DashboardAdmin()
    // {   
    //     $admin = User::all();
    //     // dd($admin);
    //     $late = Presence::latest('created_at')
    //             ->limit(5)
    //             ->get();
    //     $data = PermitEmployee::latest('created_at')
    //             ->limit(5)
    //             ->get();
    // $belumbayar=DataPayroll::where('status', 'Belum Siap')->count();
    // $bayar=DataPayroll::where('status', 'Sudah Bayar')->count();
    //     return view('DashboardAdmin.DashboardAdmin', compact('data', 'belumbayar', 'bayar', 'late', 'admin'), [
    //         'title' => 'Beranda'
    //     ]);
    // }


}
