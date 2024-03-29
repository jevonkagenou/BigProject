<?php

namespace App\Http\Controllers;

use App\Models\Payroll;
use App\Models\DataEmployee;
use App\Models\PermitEmployee;
use App\Models\Presence;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\ClockSetting;
use App\Models\slip_gaji;
use Spatie\Permission\Models\Role;


class RouteController extends Controller
{
    public function AdminReport(){
        return view('AdminReport.AdminReport',[
        'tittle'=>'Laporan']);
    }
    public function ApprovalAdmin(){
        $admin = User::all();
        $approval = PermitEmployee::where('status', 'Menunggu')->get();
        return view('ApprovalAdmin.ApproveAdmin', compact('approval', 'admin'),['tittle'=>'Approval']);
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
    public function Validation(){
        return view('Admin.Validation',[
            'tittle'=>'Validasi'
        ]);
    }
    public function EmployeeAdmin(){
        $data = DataEmployee::all();
        return view('Admin.EmployeeAdmin', ['tittle'=>'Karyawan'], compact('data'));
    }

    // public function SummaryofComponentSalary(){
    //     return view('Admin.SummaryofComponentSalary',[
    //         'tittle'=>'Ringkasan Gaji Perkomponen'
    //     ]);
    // }
    public function PresenceApproval(){
        return view('Admin.PresenceApproval',[
            'tittle'=>'Approval Presensi'
        ]);
    }
    public function Presence() {
        $role = Role::where('name', 'Karyawan')->first();
        $presence = User::query()
            ->with(['presence' => function ($query) {
                $query->whereDate('created_at', '=', now()->toDateString());
            }])
            ->where('name', '!=', 'Admin')
            ->get();
        $clockSetting = ClockSetting::findOrFail(1);

        if ($role) {
            // Menggunakan eager loading untuk mengambil data kehadiran dari pengguna dengan peran "Karyawan"
            $presence = User::query()
                ->whereHas('roles', function ($query) use ($role) {
                    $query->where('roles.id', $role->id);
                })
                ->with(['presence' => function ($query) {
                    $query->whereDate('created_at', '=', now()->toDateString());
                }])
                ->get();
        }

        // Jika peran "Karyawan" tidak ditemukan, return data kosong atau berikan pesan kesalahan
        return view('PresenceAdmin.Presence', compact('presence', 'role','clockSetting'))->with('Peran "Karyawan" tidak ditemukan.');
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
    // public function PayrollSalarySlip(){
    //     return view('Settings.PayrollSalarySlip',[
    //         'tittle'=>'Slip Gaji'
    //     ]);
    // }
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
    // public function PayrollStep(){

    //     $data = Payroll::all();
    //     $total = $data->first()->total;
    //     // Set your Merchant Server Key
    //     \Midtrans\Config::$serverKey = config('midtrans.server_key');
    //     // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    //     \Midtrans\Config::$isProduction = false;
    //     // Set sanitization on (default)
    //     \Midtrans\Config::$isSanitized = true;
    //     // Set 3DS transaction for credit card to true
    //     \Midtrans\Config::$is3ds = true;

    //     $params = array(
    //         'transaction_details' => array(
    //             'order_id' => rand(),
    //             'gross_amount' => $total,
    //         ),
    //         'customer_details' => array(
    //             'first_name' => 'budi',
    //             'last_name' => 'pratama',
    //             'email' => 'budi.pra@example.com',
    //             'phone' => '08111222333',
    //         ),
    //     );

    //     $snapToken = \Midtrans\Snap::getSnapToken($params);
    //     return view('Admin.PayrollStep',compact('snapToken','data'),['tittle'=>'Langkah Langkah Pembayaran Gaji']);
    // }
    public function Callback(Request $request){
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);

        if($hashed == $request->signature_key)
            if($request->transaction_status == 'capture'){
                $data = Payroll::find($request->order_id);
                $data->update(['status' => 'Sudah Bayar']);
            }
    }


    public function Detailkaryawan(){
        return view('Admin.Detailkaryawan',[
                'tittle'=>'Detail Karyawan'
        ]);
    }

    public function DetailSalary(){
        return view('Admin.EmployeeDetailSalarySummary',[
                'tittle'=>'Detail Summary'
        ]);
    }

    public function Employee(){
        return view('EmployeeDetails.Employee',[
            'tittle'=>'Detail Karyawan'
    ]);
    }

    public function SalaryAdjustment($id)
{
    $data = DataEmployee::find($id);
    $slipGaji = slip_gaji::all();

    return view('EmployeeDetails.SalaryAdjustment', [
        'data' => $data,
        'slipGaji' => $slipGaji
    ], ['tittle' => 'Detail Karyawan']);
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

    public function showBlankImageDocument($id)
    {
        $data = Announcement::findOrFail($id);
        $imagePath = 'gambar/' . $data->lampiran;
        // dd($imagePath);
        return response()->file(public_path($imagePath));
    }

}