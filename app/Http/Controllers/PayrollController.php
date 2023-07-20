<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Payroll;
use App\Models\DataPayroll;

class PayrollController extends Controller
{
    public function Payroll(Request $request)
    {
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

        return view('Admin.Payroll', compact('payrolls'));
    }

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
