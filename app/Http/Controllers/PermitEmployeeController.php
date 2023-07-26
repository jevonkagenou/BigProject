<?php

namespace App\Http\Controllers;

use App\Models\PermitEmployee;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Toastr;

class PermitEmployeeController extends Controller
{
    public function Add_Permit(Request $request){

        // dd($request);
        $request->validate([
            'start_date' => 'required',
            'date_leave' => 'required',
            'tipe' => 'required',
            'description' => 'required'
        ]);


        $date1 = Carbon::parse($request->input('start_date'));
        $date2 = Carbon::parse($request->input('date_leave'));

        $total_day = $date2->diffInDays($date1);

        //pengecekan apakah sudah absen
        $lastApplication = PermitEmployee::where('user_id', Auth()->id())
        ->where('tipe', $request->input('tipe'))
        ->orderBy('created_at', 'desc')
        ->first();

        if ($lastApplication) {
            $diffInHours = Carbon::now()->diffInHours($lastApplication->created_at);
            if ($diffInHours < 24) {
                return redirect()->back()->with(['error', 'Anda hanya dapat mengajukan izin, sakit, atau cuti sekali dalam 24 jam.']);            }
        }

        // Lampiran
        $lampiranPath = null;

        if ($request->hasFile('lampiran')) {
            $lampiranPath = $request->file('lampiran')->store('/gambar', 'public');
        }

            $lampiranPath = null;

            if ($request->hasFile('lampiran')) {
                $lampiranPath = $request->file('lampiran')->store('/gambar', 'public');
            }

        $data = PermitEmployee::create([
            'user_id' => Auth()->id(),
            'start_date' => $request->input('start_date'),
            'date_leave' => $request->input('date_leave'),
            'tipe' => $request->input('tipe'),
            'lampiran' => $request->input('lampiran'),
            'total_day' => $total_day,
            'description' => $request->input('description')
        ]);

        return  redirect()->back();
    }
}
