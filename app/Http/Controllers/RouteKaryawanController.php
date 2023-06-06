<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteKaryawanController extends Controller
{
    public function PermitLeaveEmployee(){
        return view('Karyawan.PermitLeaveEmployee');
    }
    
}
