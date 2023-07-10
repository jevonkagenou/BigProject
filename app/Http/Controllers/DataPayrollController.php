<?php

namespace App\Http\Controllers;
use App\Models\DataEmployee;
use App\Models\DataPayroll;
use Illuminate\Http\Request;

class DataPayrollController extends Controller
{
    public function PayrolEmployee($id){
    $data = DataEmployee::find($id);
    return view('EmployeeDetails.PayrolEmployee', compact('data'),['tittle'=>'Data Payroll' ]);
    }

    public function Data_Salary(Request $request,$id){

        $request->validate([
            'basic_salary' => 'required',
            'overtime_pay' => 'required',
            'credit_allowance' => 'required',
            'other_allowances' => 'required',
            'cooperative' => 'required',
            'salary_cut' => 'required',
            'lateness' => 'required',
        ]);

        $data = DataPayroll::create([
            'basic_salary' => $request->basic_salary,
            'overtime_pay' => $request->overtime_pay,
            'credit_allowance' => $request->credit_allowance,
            'other_allowances' => $request->other_allowances,
            'cooperative' => $request->cooperative,
            'salary_cut' => $request->salary_cut,
            'lateness' => $request->lateness,
            'cooperative' => $request->cooperative
        ]);

        return redirect()->route('Data_Payroll', compact('data'));
    }
}
