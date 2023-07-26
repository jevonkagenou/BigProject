<?php

namespace App\Http\Controllers;
use App\Models\PermitEmployee;
use App\Models\Presence;
use App\Models\DataPayroll;
use App\Models\User;


use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function DashboardAdmin()
{   
    $admin = User::all();
    // dd($admin);
    $late = Presence::latest('created_at')
            ->limit(5)
            ->get();
    $data = PermitEmployee::latest('created_at')
            ->limit(5)
            ->get();
$belumbayar=DataPayroll::where('status', 'Belum Siap')->count();
$bayar=DataPayroll::where('status', 'Sudah Bayar')->count();
    return view('DashboardAdmin.DashboardAdmin', compact('data', 'belumbayar', 'bayar', 'late', 'admin'), [
        'title' => 'Beranda'
    ]);
}


}
