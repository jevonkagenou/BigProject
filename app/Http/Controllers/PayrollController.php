<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Payroll;
class PayrollController extends Controller
{
    public function Payroll()
    {
        $payrolls = Payroll::all();
        $statuses = [
            'Belum Siap' => 'btnradio14',
            'Siap Bayar' => 'btnradio15',
            'Sudah Bayar' => 'btnradio16'
        ];

        foreach ($payrolls as $payroll) {
            $payroll->status_label = $statuses[$payroll->status];
        }

        return view('Admin.Payroll', ['payrolls' => $payrolls]);
    }

    public function UpdatePayrollStatus(Request $request)
    {
        $payrollId = $request->input('payrollId');
        $newStatus = $request->input('newStatus');

        $payroll = Payroll::find($payrollId);

        if (!$payroll) {
            return response()->json(['message' => 'Data payroll tidak ditemukan'], 404);
        }

        $payroll->status = $newStatus;
        $payroll->save();

        return response()->json(['message' => 'Status payroll berhasil diperbarui'], 200);
    }
}
