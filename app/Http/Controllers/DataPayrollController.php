<?php

namespace App\Http\Controllers;
use App\Models\DataEmployee;
use App\Models\DataPayroll;
use App\Models\OtherAllowances;
use GuzzleHttp\RequestOptions;
use Illuminate\Http\Request;

class DataPayrollController extends Controller
{
    public function PayrolEmployee($id){
    $data = DataEmployee::find($id);
    return view('EmployeeDetails.PayrolEmployee', compact('data'),['tittle'=>'Data Payroll' ]);
    }

        public function Data_Salary(Request $request, $id){
            $data = DataEmployee::find($id);
            // dd($request);
            $payroll = DataPayroll::create([
                'data_employee_id' => $data->id,
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
        return redirect()->route('SalaryAdjustment',$data->id)->with('success', 'Data Anda Telah Ditambahkan');
    }
}
