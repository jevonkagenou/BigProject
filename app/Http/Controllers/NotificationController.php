<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\PermitEmployee;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function saveNotifikasi(Request $request, $id)
    {
        $permitEmployee = PermitEmployee::find($id);
        $permitEmployee->update([
            'status' => 'Ditolak'
        ]);
        $notif = Notification::create([
            'user_id' => $permitEmployee->user_id,
            'reason' => $request->reason,
        ]);

        return redirect()->back()->with('success', 'Anda berhasil menolak Karyawan ini');
    }
    public function markAsRead(Request $request, $notifId)
    {
        // Temukan notifikasi berdasarkan ID
        $notif = Notification::find($notifId);

        if (!$notif) {
         return redirect()->back()->with('error', 'Pesan Tidak Ada');
        }

        // Jika notifikasi belum dibaca, tandai sebagai telah dibaca
        if ($notif->is_read === null) {
            $notif->update([
                'is_read' => now(),
            ]);
        }

        return redirect()->back()->with('success', 'Pesan Telah Dibaca');
    }
    public function readAll(){
        $notif = Notification::where('user_id', Auth::user()    ->id);
        $notif->update([
            'is_read' => now(),
        ]);

        return redirect()->back()->with('success', 'Anda Menandai Semua Sebagai Sudah Dibaca');
    }
}
