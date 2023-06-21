<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function AdminReport(){
        return view('AdminReport.AdminReport',[
        'tittle'=>'Laporan']);
    }
    public function ApprovalAdmin(){
        return view('ApprovalAdmin.ApproveAdmin',[
            'tittle'=>'Approval'
        ]);
    }
    public function SalarySummary(){
        return view('Admin.SalarySummary',[
            'tittle'=>'Ringkasan Gaji'
        ]);
    }
    public function PermitLeaveAdmin(){
        return view('Admin.PermitLeaveAdmin',[
            'tittle'=>'Izin Cuti Admin'
        ]);
    }
    public function WorkSchedule(){
        return view('Admin.WorkSchedule',[
            'tittle'=>'Jadwal Kerja'
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
    public function AdminProfile(){
        return view('Admin.ProfilAdmin',[
            'tittle'=>'Profil Admin'
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
        return view('Admin.EmployeeAdmin',[
            'tittle'=>'Karyawan'
        ]);
    }
    public function PayrolEmployee(){
        return view('EmployeeDetails.PayrolEmployee',[
            'tittle'=>'Detail Karyawan'
        ]);
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
    public function Presence(){
        return view('PresenceAdmin.Presence');
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
    public function AddAccount(){
        return view('Settings.AddAccount',[
            'tittle'=>'Tambah Rekening'
        ]);
    }
    public function ProfilAdmin(){
        return view('Admin.ProfilAdmin',[
            'tittle'=>'Profil'
        ]);
    }
    public function AddWorkSchedule(){
        return view('Admin.AddWorkSchedule',[
            'tittle'=>'Tambah Jadwal Kerja'
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
