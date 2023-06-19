<?php

namespace App\Http\Controllers;

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

    public function PermitEmployee(){
        return view ('PermitEmployee.PermitEmployee',[
            'title'=>'Izin Cuti'
        ]);
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

    public function ProfileEmployee(){
        return view ('Karyawan.ProfileEmployee',[
            'title'=>'Profil'
        ]);
    }
}
