<?php

namespace App\Http\Controllers;

use App\Models\kompdapat;
use Illuminate\Http\Request;
use App\Models\Payroll;
use App\Models\slip_gaji;

class SalaryConclusionController extends Controller
{
    public function SalarySummary()
    {

        // dd($data);
        $name = slip_gaji::with('kompdapats','komppotong')->get();


        // dd($name);
        return view('Admin.SalarySummary', compact('name'));
    }


    public function SelectedMonth(Request $request){
        // dd($request->created_at);
        $data = Payroll::whereMonth('created_at', $request->created_at)->get();
        // dd($data);
        return view;
    }
}
