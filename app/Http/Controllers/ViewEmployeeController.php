<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewEmployeeController extends Controller
{
    public function DashboardEmployee(){
        return view ('DashboardEmployee.DashboardEmployee');
    }

    public function EmployeePresence(){
        return view ('EmployeePresence.EmployeePresence');
    }

    public function PermitEmployee(){
        return view ('PermitEmployee.PermitEmployee');
    }

    public function ApprovalEmployee(){
        return view ('ApprovalEmployee.ApprovalEmployee');
    }

    public function CompanyEmployee(){
        return view ('');
    }

    public function SalaryEmployee(){
        return view ('');
    }

    public function Calendar(){
        return view ('');
    }
}
