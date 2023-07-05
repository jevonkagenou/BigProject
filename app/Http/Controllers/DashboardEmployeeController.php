<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;


class DashboardEmployeeController extends Controller
{
    public function DashboardEmployee(){
        $data = Announcement::all();
        return view('DashboardEmployee.DashboardEmployee',[
            'tittle'=>'Beranda'
        ], compact('data'));
    }
}
