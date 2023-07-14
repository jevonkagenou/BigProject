<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payroll;

class SalaryConclusionController extends Controller
{
    public function SalarySummary(){
        return view('Admin.SalarySummary',[
            'tittle'=>'Ringkasan Gaji'
        ]);
    }

    public function SelectedMonth(Request $request){
        // dd($request->created_at);
        $data = Payroll::whereMonth('created_at', $request->created_at)->get();
        // dd($data);
        return view;
    }
}
