<?php

namespace App\Http\Controllers;

use App\Models\Rekening;
use App\Models\DataEmployee;
use App\Models\PermitEmployee;
use App\Models\Presence;
use App\Models\User;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function AdminReport(){
        return view('AdminReport.AdminReport',[
        'tittle'=>'Laporan']);
    }
    public function ApprovalAdmin(){
        $approval = PermitEmployee::where('status', 'Menunggu')->get();
        return view('ApprovalAdmin.ApproveAdmin', compact('approval'),['tittle'=>'Approval']);
    }
    public function SalarySummary(){
        return view('Admin.SalarySummary',[
            'tittle'=>'Ringkasan Gaji'
        ]);
    }
  
    
    public function PermitLeaveAdmin(Request $request)
    {
        $tipe = $request->input('tipe');
        $status = $request->input('status');

        $query = PermitEmployee::query();

        if ($tipe) {
            $query->where('tipe', $tipe);
        }

        if ($status) {
            $query->where('status', $status);
        }

        $approve_admin = $query->get();

        return view('Admin.PermitLeaveAdmin', compact('approve_admin'))->with(['tittle' => 'Izin Cuti Karyawan']);
    }
    
    
    public function WorkSchedule(){
        return view('Admin.WorkSchedule',[
            'title'=>'Jadwal Kerja'
        ]);
    }
    public function SalaryPaymentReport(){
        return view('Admin.SalaryPaymentReport',[
            'tittle'=>'Pembayaran Gaji'
        ]);
    }
    public function Announcement(){
        return view('Admin.Announcement',[
            'tittle'=>'Pengumuman'
        ]);
    }
    public function AnnouncementUpdate(){
        return view('Admin.AnnouncementUpdate',[
            'tittle'=>'Edit Pengumuman'
        ]);
    }
    public function AddPayslips(){
        return view('Admin.AddPayslips',[
            'tittle'=>'Tambah Slip Gaji'
        ]);
    }
    public function Payroll(){
        return view('Admin.Payroll');
    }
    public function Validation(){
        return view('Admin.Validation',[
            'tittle'=>'Validasi'
        ]);
    }
    public function EmployeeAdmin(){
        $data = DataEmployee::all();
        return view('Admin.EmployeeAdmin', ['tittle'=>'Karyawan'], compact('data'));
    }

    public function SummaryofComponentSalary(){
        return view('Admin.SummaryofComponentSalary',[
            'tittle'=>'Ringkasan Gaji Perkomponen'
        ]);
    }
    public function PresenceApproval(){
        return view('Admin.PresenceApproval',[
            'tittle'=>'Approval Presensi'
        ]);
    }
    public function Presence() {
        $presence = User::query()
            ->with(['presence' => function ($query) {
                $query->whereDate('created_at', '=', now()->toDateString());
            }])
            ->where('role', '!=', 'admin')
            ->get();
    
        $users = User::all();
    
        return view('PresenceAdmin.Presence', compact('presence'));
    }
    
    public function Setting(){
        return view('Settings.Setting',[
            'tittle'=>'Pengaturan'
        ]);
    }
    public function Company(){
        return view('Settings.Company',[
            'tittle'=>'Perusahaan'
        ]);
    }
    public function PayrollSalarySlip(){
        return view('Settings.PayrollSalarySlip',[
            'tittle'=>'Slip Gaji'
        ]);
    }
    public function AccountsUsers(){
        return view('Settings.AccountsUsers',[
            'tittle'=>'Akun dan Pengguna'
        ]);
    }
    public function AddEmployee(){
        return view('Admin.AddEmployee',[
            'tittle'=>'Tambah Karyawan'
        ]);
    }
    public function StartPayroll(){
        return view('Admin.StartPayroll',[
            'tittle'=>'Siap Bayar'
        ]);
    }
    public function PayrollStep(){
        return view('Admin.PayrollStep',[
            'tittle'=>'Langkah Langkah Pembayaran Gaji'
        ]);
    }
    public function Detailkaryawan(){
        return view('Admin.Detailkaryawan',[
                'tittle'=>'Detail Karyawan'
        ]);
    }

    public function Employee(){
        return view('EmployeeDetails.Employee',[
            'tittle'=>'Detail Karyawan'
    ]);
    }
    public function SalaryAdjustment(){
        return view('EmployeeDetails.SalaryAdjustment',[
            'tittle'=>'Detail Karyawan'
    ]);
    }

    public function AddAccount(Request $request)
    {
        $rekeningList = Rekening::all();

        return view('Settings.AddAccount', compact('rekeningList'),[
            'tittle'=>'Tambah Rekening'
        ]);
    }

   
    public function SettingSchedule(){
        return view('Settings.SettingSchedule',[
            'tittle'=>'Jadwal Kerja'
        ]);
    }
    public function DetileSchedule(){
        return view('Settings.DetileSchedule',[
            'tittle'=>'Detail Jadwal Kerja'
        ]);
    }

    public function AnnualLeave(){
        return view('Admin.AnnualLeave',[
            'tittle'=>'Cuti Tahunan'
        ]);
    }
    public function EditSchedule(){
        return view('Settings.EditSchedule',[
            'tittle'=>'Edit Jadwal Kerja'
        ]);
    }
}
