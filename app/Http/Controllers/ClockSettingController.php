<?php

namespace App\Http\Controllers;

use App\Models\ClockSetting;
use Illuminate\Http\Request;

class ClockSettingController extends Controller
{
    public function update(Request $request, $id)
    {
        $clockSetting = ClockSetting::find($id);
        // Periksa atribut yang ada dalam request dan update data sesuai kebutuhan
        if ($request->has('clock_in')) {
            $clockSetting->clock_in = $request->clock_in;
        }

        if ($request->has('late_presence')) {
            $clockSetting->late_presence = $request->late_presence;
        }

        if ($request->has('home_time')) {
            $clockSetting->home_time = $request->home_time;
        }

        if ($request->has('overtime_hours')) {
            $clockSetting->overtime_hours = $request->overtime_hours;
        }

        if ($request->has('overtime_hours_back')) {
            $clockSetting->overtime_hours_back = $request->overtime_hours_back;
        }

        // Simpan perubahan ke basis data
        $clockSetting->save();

        return redirect()->back()->with('success', 'Jam presensi berhasil diubah');
    }

    // if ($clockSetting) {
    //     $clockSetting->update([
    //         'clock_in' => $request->input('clock_in'),
    //         'late_presence' => $request->input('late_presence'),
    //         'home_time' => $request->input('home_time'),
    //         'overtime_hours' => $request->input('overtime_hours'),
    //         'overtime_hours_back' => $request->input('overtime_hours_back')
    //     ]);
        
    //     // Redirect kembali ke halaman sebelumnya setelah berhasil memperbarui
    //     return redirect()->back()->with('success', 'Data berhasil diperbarui');
    // } else {
    //     return redirect()->back()->with('error', 'Data tidak ditemukan');
    // }
}
