<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    
    public function AdminReport(){
        return view('AdminReport.AdminReport');
    }
    public function ApprovalAdmin(){
        return view('ApprovalAdmin.ApproveAdmin');
    }
    public function SalarySummary(){
        return view('Admin.SalarySummary');
    }
    public function PermitLeaveAdmin(){
        return view('Admin.PermitLeaveAdmin');
    }
    public function WorkSchedule(){
        return view('Admin.WorkSchedule');
    }
    public function SalaryPaymentReport(){
        return view('Admin.SalaryPaymentReport');
    }
    public function Announcement(){
        return view('Admin.Announcement');
    }
    public function AdminProfile(){
        return view('Admin.ProfilAdmin');
    }
    public function AddPayslips(){
        return view('Admin.AddPayslips');
    }
    public function Payroll(){
        return view('Admin.Payroll');
    }
    public function Validation(){
        return view('Admin.Validation');
    }
    public function EmployeeAdmin(){
        return view('EmployeeAdmin.EmployeeAdmin');
    }
    public function PayrolEmployee(){
        return view('EmployeeDetails.PayrolEmployee');
    }
    public function SummaryofComponentSalary(){
        return view('Admin.SummaryofComponentSalary');
    }
    public function DashboardAdmin(){
        return view('DashboardAdmin.DashboardAdmin');
    }
    public function PresenceApproval(){
        return view('Admin.PresenceApproval');
    }
    public function Presence(){
        return view('PresenceAdmin.Presence');
    }
    public function Setting(){
        return view('Settings.Setting');
    }
    public function Company(){
        return view('Settings.Company');
    }
    public function PayrollSalarySlip(){
        return view('Settings.PayrollSalarySlip');
    }
    public function AccountsUsers(){
        return view('Settings.AccountsUsers');
    }
    public function AddEmployee(){
        return view('Admin.AddEmployee');
    }
    public function StartPayroll(){
        return view('Admin.StartPayroll');
    }
}
