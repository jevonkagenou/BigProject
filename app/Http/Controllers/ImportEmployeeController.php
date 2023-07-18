<?php

namespace App\Http\Controllers;

use App\Exports\EmployeeExport;
use App\Imports\EmployeeImport;
use App\Models\DataEmployee;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

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
     

    //export
    public function export(){
        return Excel::download(new EmployeeExport, 'user.xlsx');
    }
}
