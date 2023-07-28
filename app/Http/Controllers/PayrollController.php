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
    public function Payroll(Request $request)
    {        
        $payroll = Payroll::with('dataPayroll','kompdapat')->get();       

        // Tentukan waktu awal (07:00:00) dan waktu akhir (12:00:00) dalam format waktu
            $startTime = '19:00:00';
            $endTime = '24:00:00';

            // Ambil data dari database dengan rentang waktu yang diinginkan (jam 7 hingga 12) pada bulan tertentu
            $data = Presence::whereBetween(DB::raw('TIME(time)'), [$startTime, $endTime])
                            ->selectRaw('enter,go_home,overtime,home_overtime, DATE_FORMAT(time, "%Y-%m") as month, time')
                            ->groupBy('month', 'enter', 'go_home', 'overtime', 'home_overtime', 'time')
                            ->get();
            $count =
            // return $data;
            // dd($data);

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

        return view('Admin.Payroll', compact('payrolls','payroll','data'));
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
