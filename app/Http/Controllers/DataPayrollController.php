<?php

namespace App\Http\Controllers;
use App\Models\DataEmployee;
use App\Models\DataPayroll;
use App\Models\OtherAllowances;
use App\Models\Presence;
use GuzzleHttp\RequestOptions;
use Illuminate\Http\Request;
use App\Models\slip_gaji;

class DataPayrollController extends Controller
{
    public function PayrolEmployee($id){
    $data = DataEmployee::find($id);
    $pay = DataPayroll::find($id);
    $pre = Presence::find($id);
    return view('EmployeeDetails.PayrolEmployee', compact('data','pay','pre'),['tittle'=>'Data Payroll' ]);
    }

    public function Data_Salary(Request $request, $id){
            $data = DataEmployee::find($id);
            $dataPayroll = DataPayroll::findorfail($id);
            $periode = slip_gaji::latest()->first()->periode;
            

            // dd($request);
            $payroll = DataPayroll::create([
                'data_employee_id' => $data->id,
                'slip_gaji_id' => $request->slip_gaji_id,
                'basic_salary' => $request->basic_salary,
                'overtime_pay' => $request->overtime_pay,
                'credit_allowance' => $request->credit_allowance,
                'salary_cut'=> $request->salary_cut,
                'lateness' => $request->lateness
            ]);

            foreach($request->other_allwonce_name as $i => $item){
                OtherAllowances::create([
                    'data_payroll_id' => $payroll->id,
                    'other_allwonce_name' => $item,
                    'large_ammount_allowance' => $request->large_ammount_allowance[$i]
                ]);
            }
            return redirect()->route('PayrolEmployee', ['id' => $data->id, 'periode' => $periode])->with('success', 'Data Anda Telah Ditambahkan');
    }

    public function gaji(){
        $gaji = DataEmployee::find();
        return view ('admin.payroll')->with('gaji',$gaji);
    }
}
