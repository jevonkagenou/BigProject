<?php

namespace App\Http\Controllers;

use App\Models\AddWorkSchedule;
use App\Models\DateWorkSchedule;
use App\Models\Presence;
use App\Models\slip_gaji;
use App\Models\PermitEmployee;
use App\Models\DataPayroll;
use App\Models\DataEmployee;
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
        $title = 'Izin Cuti';
    
        $tipe = $request->input('tipe');
        $status = $request->input('status');
    
        $query = PermitEmployee::query();
    
        if ($tipe) {
            $query->where('tipe', $tipe);
        }
    
        if ($status) {
            $query->where('status', $status);
        }
    
        $data = $query->get();
    
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
        $nota = DataPayroll::all();
        $slip = slip_gaji::all();
        // dd($nota);
        return view ('karyawan.NotaGaji', compact('nota','slip'),[
            'title'=>'Riwayat Gaji'
        ]);
    }
    public function cetak(){
        $modal = DataPayroll::all();
        $kalo = slip_gaji::all();
        $sia = DataEmployee::all();
        return view ('karyawan.cetak', compact('modal','kalo','sia'),[
            'tittle'=>'Cetak'
        ]);
    }
    public function Calendar(Request $request)
    {
        if($request->ajax()){
            $data = DateWorkSchedule::where('user_id', auth()->id()
        )->get();
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
