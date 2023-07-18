<?php

namespace App\Http\Controllers;

use App\Models\slip_gaji;
use App\Models\DataEmployee;
use App\Models\DataPayroll;
use App\Models\Payroll;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StartPayrollController extends Controller
{
    public function StartPayroll()
    {
        $PayrollSalarySlip = DB::table('slip_gajis')
        ->select('periode', 'periode_dimulai', DB::raw('count(*) as total'))
        ->groupBy('periode', 'periode_dimulai')
        ->get();
        $dataEmployee = DataEmployee::all();
        $payrolls = Payroll::all();

        $dpayroll = Datapayroll::count();
        $slipgaji = slip_gaji::count();
        $tetap =  DataPayroll::where('slip_gaji_id', 1)->count();
        $tdk_tetap =  DataPayroll::where('slip_gaji_id', 2)->count();

        $total_payrolls = $payrolls->count();
        $sudah_bayar_payrolls = $payrolls->where('status', 'Sudah Bayar')->count();
        $persentasi_sudah_bayar = $total_payrolls > 0 ? round($sudah_bayar_payrolls / $total_payrolls * 100) : 0;

        return view('Admin.StartPayroll', [
            'tittle' => 'Siap Bayar',
            'PayrollSalarySlip' => $PayrollSalarySlip,
            'dataEmployee' => $dataEmployee,
            'payrolls' => $payrolls,
            'total_payrolls' => $total_payrolls,
            'persentasi_sudah_bayar' => $persentasi_sudah_bayar,
            'dpayroll' => $dpayroll,
            'tetap' => $tetap,
            'tdk_tetap' => $tdk_tetap
        ]);
    }
}
