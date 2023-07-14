<?php

namespace App\Http\Controllers;

use App\Models\slip_gaji;
use App\Models\DataEmployee;
use App\Models\Payroll;
use Illuminate\Http\Request;

class StartPayrollController extends Controller
{
    public function StartPayroll()
    {
        $PayrollSalarySlip = slip_gaji::all();
        $dataEmployee = DataEmployee::all();
        $payrolls = Payroll::all();
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
        ]);
    }
}
