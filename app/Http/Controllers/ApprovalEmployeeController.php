<?php

namespace App\Http\Controllers;

use App\Models\ApprovalEmployee;
use Illuminate\Http\Request;

class ApprovalEmployeeController extends Controller
{
    public function ApprovalEmployee(){
        $data = ApprovalEmployee::all();
       return view('ApprovalEmployee.ApprovalEmployee', compact('data'));
    }
    
}
