<?php

namespace App\Http\Controllers;

use App\Models\PermitEmployee;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Toastr;

class PermitEmployeeController extends Controller
{
    
    public function Add_Permit(Request $request)
    {
        $request->validate([
            'start_date' => 'required',
            'date_leave' => 'required',
            'tipe' => 'required',
            'description' => 'required'
        ]);

        // Pengecekan apakah pengguna sudah mengajukan izin hari ini
        $lastApplication = PermitEmployee::where('user_id', Auth()->id())
            ->whereDate('created_at', Carbon::today())
            ->first();
        
        if ($lastApplication) {
            return redirect()->back()->with('error', 'Anda sudah mengajukan izin hari ini. Silahkan coba lagi besok.');
        }

        // Lanjutkan dengan menyimpan izin baru ke dalam database
        $date1 = Carbon::parse($request->input('start_date'));
        $date2 = Carbon::parse($request->input('date_leave'));
        $total_day = $date2->diffInDays($date1);

        // Lampiran
        $lampiranPath = null;

        if ($request->hasFile('lampiran')) {
            $lampiranPath = $request->file('lampiran')->store('/gambar', 'public');
        }

        $data = PermitEmployee::create([
            'user_id' => Auth()->id(),
            'start_date' => $request->input('start_date'),
            'date_leave' => $request->input('date_leave'),
            'tipe' => $request->input('tipe'),
            'lampiran' => $lampiranPath,
            'total_day' => $total_day,
            'description' => $request->input('description')
        ]);

        // Flash success message
        Session::flash('success', 'Izin berhasil terkirim.');

        return redirect()->back();
    }
}
