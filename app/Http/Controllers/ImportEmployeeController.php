<?php

namespace App\Http\Controllers;

use App\Exports\EmployeeExport;
use App\Exports\NotaGajiExport;
use App\Imports\EmployeeImport;
use App\Imports\PayrollExport; //payrollimport
use App\Models\DataEmployee;
use App\Models\DataPayroll;
use App\Models\slip_gaji;
use App\Exports\SummaryofcomponentsalaryExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use PDF;

class ImportEmployeeController extends Controller
{
    public function import(Request $request)
    {
        $this->validate($request, [
            'myFile' => 'required|mimes:xls,xlsx'
        ]);
    
        $file = $request->file('myFile');
        Excel::import(new EmployeeImport, $file);
    
        return redirect()->back()->with('success', 'Data berhasil diimport. Jumlah baris yang diimpor:');
    }
    public function import2(Request $request)
    {
        $this->validate($request, [
            'myFile' => 'required|mimes:xls,xlsx'
        ]);
    
        $file = $request->file('myFile');
        Excel::import(new PayrollExport, $file);
    
        return redirect()->back()->with('success', 'Data berhasil diimport. Jumlah baris yang diimpor:');
    }
    //export
    public function exportpdf()
    {
        $modal = DataPayroll::all();
        $kalo = slip_gaji::all();
        $sia = DataEmployee::all();
    
        $pdf = PDF::loadview('Karyawan.cetak-pdf', ['modal' => $modal, 'kalo' => $kalo, 'sia' => $sia]);
        return $pdf->download('modal.pdf');
    }
    
}
