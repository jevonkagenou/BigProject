<?php

namespace App\Http\Controllers;
use App\Models\PermitEmployee;
use App\Models\Presence;
use App\Models\Payroll;


use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function DashboardAdmin()
{   
    $late = Presence::latest('created_at')
            ->limit(5)
            ->get();
    $data = PermitEmployee::latest('created_at')
            ->limit(5)
            ->get();
$belumbayar=Payroll::where('status', 'Belum Siap')->count();
$bayar=Payroll::where('status', 'Sudah Bayar')->count();
    return view('DashboardAdmin.DashboardAdmin', compact('data', 'belumbayar', 'bayar', 'late'), [
        'title' => 'Beranda'
    ]);
}


}
