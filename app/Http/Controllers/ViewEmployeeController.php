<?php

namespace App\Http\Controllers;

use App\Models\AddWorkSchedule;
use App\Models\DateWorkSchedule;
use App\Models\PermitEmployee;
use App\Models\Presence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewEmployeeController extends Controller
{
    public function DashboardEmployee(){
        return view ('DashboardEmployee.DashboardEmployee',[
            'title'=>'Dashboard'
        ]);
    }

    public function EmployeePresence(){

        $presence = Presence::where('user_id',Auth::user()->id)->get();
        return view ('EmployeePresence.EmployeePresence',compact('presence'),[
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

    public function Calendar(Request $request)
    {
        if($request->ajax()){
            $data = DateWorkSchedule::all();
            return response($data);
        }

        return view ('karyawan.KalenderKaryawan');
    }
    public function Schedule(){
        return view ('Admin.Schedule',[
            'tittle'=>'Profil Karyawan'
        ]);
    }
}
