<?php

namespace App\Http\Controllers;

use App\Models\ApproveAdmin;
use App\Models\PermitEmployee;
use Illuminate\Http\Request;

class ApproveAdminController extends Controller
{
    public function Accepted($user_id){
        $data = PermitEmployee::Find($user_id);
        $data->Update([
            'status' => 'Diterima'
        ]);
        return redirect()->back();
    }
    public function Rejected($user_id){
        $data = PermitEmployee::Find($user_id);
        $data->Update([
            'status' => 'Ditolak'
        ]);
        return redirect()->back();
    }
}
