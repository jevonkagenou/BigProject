<?php

namespace App\Http\Controllers;

use App\Models\ApproveAdmin;
use App\Models\PermitEmployee;
use App\Models\Notification;
use Illuminate\Http\Request;

class ApproveAdminController extends Controller
{
    public function Accepted($user_id){
        $data = PermitEmployee::Find($user_id);
        $data->Update([
            'status' => 'Diterima'
        ]);

        $notification = Notification::create([
            'user_id' => $data->user_id,
            'reason' => 'Perizinan Anda telah Diterima.',
            'status' => 'Diterima',
        ]);
        // dd($notification);

        return redirect()->back();
    }
    public function Rejected($user_id){
        $permitEmployee = PermitEmployee::find($user_id);

        if (!$permitEmployee) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        $permitEmployee->update([
            'status' => 'Ditolak'
        ]);

        $notification = new Notification([
            'user_id' => $permitEmployee->user_id,
            'reason' => 'Perizinan Anda telah ditolak.',
            'status' => 'Unread',
        ]);

        $notification->save();

        return redirect()->back()->with('success', 'Perizinan telah ditolak.');
    }

}
