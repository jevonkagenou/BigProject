<?php

namespace App\Http\Controllers;

use App\Models\PermitEmployee;
use Illuminate\Http\Request;

class ViewEmployeeController extends Controller
{
    public function DashboardEmployee(){
        return view ('DashboardEmployee.DashboardEmployee',[
            'title'=>'Dashboard'
        ]);
    }

    public function EmployeePresence(){
        return view ('EmployeePresence.EmployeePresence',[
            'title'=>'Presensi'
        ]);
    }

    public function PermitEmployee(Request $request){

        $data = PermitEmployee::where('status', 'LIKE', '%' . $request->status . '%')->get();
        $title = 'Izin Cuti';

        return view('PermitEmployee.PermitEmployee', compact('data', 'title'));
    }
    

    public function ApprovalEmployee(){
        return view ('ApprovalEmployee.ApprovalEmployee',[
            'title'=>'Approval'
        ]);
    }

    public function CompanyEmployee(){
        return view ('karyawan.ProfileEmployee',[
            'tittle'=>'Profil Karyawan'
        ]);
    }

    public function SalaryEmployee(){
        return view ('karyawan.NotaGaji',[
            'title'=>'Riwayat Gaji'
        ]);
    }

    public function Calendar(){
        return view ('karyawan.KalenderKaryawan',[
            'title'=>'Kalender'
        ]);
    }
    public function Schedule(){
        return view ('Admin.Schedule',[
            'tittle'=>'Profil Karyawan'
        ]);
    }
}
