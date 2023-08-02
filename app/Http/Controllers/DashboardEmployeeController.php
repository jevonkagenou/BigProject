<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\PermitEmployee;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification;




class DashboardEmployeeController extends Controller
{
    public function DashboardEmployee()
    {
        $data = PermitEmployee::where('status', 'Ditolak')->get();
        $user_id = Auth::user()->id;
        $unreadNotifications = Notification::where('user_id', $user_id)->whereNull('is_read')->count();
        $notif = Notification::where('user_id', $user_id)->whereNull('is_read')->get();

        return view('DashboardEmployee.DashboardEmployee', [
            'tittle' => 'Beranda',
            'data' => $data,
            'unreadNotifications' => $unreadNotifications,
            'notif' => $notif,
        ]);
    }

}
