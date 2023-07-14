<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Payroll;

class PayrollController extends Controller
{
    public function Payroll()
    {
        $payroll = Payroll::all();
    $statuses = [
            'Belum Siap' => 'btnradio14',
            'Siap Bayar' => 'btnradio15',
            'Sudah Bayar' => 'btnradio16'
        ];

        foreach ($payroll as $payrollId) {
            $payrollId->status_label = $statuses[$payrollId->status];
        }

        return view('Admin.Payroll', compact('payroll'));
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

        return response()->json(['message' => 'Status payroll berhasil diperbarui'], 200);

    }
}
