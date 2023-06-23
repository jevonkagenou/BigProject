<?php

namespace App\Http\Controllers;

use App\Models\ApproveAdmin;
use App\Models\PermitEmployee;
use Illuminate\Http\Request;

class ApproveAdminController extends Controller
{
    public function Approve($user_id, Request $request){
        $approve_admin = PermitEmployee::all();
        $approve_admin = ApproveAdmin::where('user_id', $user_id)->FindOrFail();
        $approve_admin->status = $request->status;
        $approve_admin->save();

        return redirect()->back();
    }
}
