<?php

namespace App\Http\Controllers;

use App\Models\kompdapat;
use App\Models\komppotong;
use Illuminate\Http\Request;
use App\Models\Payroll;
use App\Models\slip_gaji;

class SalaryConclusionController extends Controller
{
    public function SalarySummary()
    {
        $name = kompdapat::groupBy('nama_id')
        ->selectRaw('nama_id, sum(uang_dapat) as uang_dapat')
        ->get();
        $nama = komppotong::groupBy('nama_id')
        ->selectRaw('nama_id, sum(uang_potong) as uang_potong')
        ->get();
        // dd($nama);
        // dd($name);
    return view('Admin.SalarySummary', compact(['name','nama']));
    }



    public function SelectedMonth(Request $request){
        // dd($request->created_at);
        $data = Payroll::whereMonth('created_at', $request->created_at)->get();
        // dd($data);
        return view;
    }
}
