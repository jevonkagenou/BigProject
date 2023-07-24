<?php

namespace App\Http\Controllers;

use App\Models\ApprovalEmployee;
use App\Models\PermitEmployee;
use Illuminate\Http\Request;

class ApprovalEmployeeController extends Controller
{
    public function ApprovalEmployee(){
        $data = PermitEmployee::all();
       return view('ApprovalEmployee.ApprovalEmployee', compact('data'));
    }

}
