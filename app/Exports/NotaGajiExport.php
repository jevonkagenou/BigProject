<?php

namespace App\Exports;

use App\Models\DataPayroll;
use Maatwebsite\Excel\Concerns\FromCollection;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;
use PDF;

class NotaGajiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataPayroll::select(
        'data_employee_id',
        'slip_gaji_id',
        'basic_salary',
        'overtime_pay',
        'credit_allowance',
        'cooperative',
        'salary_cut',
        'lateness',
        'total')->first();
    }

    public function headings(): array
    {
        return["data_employee_id","slip_gaji_id","basic_salary","overtime_pay","credit_allowance","cooperative","salary_cut","lateness","total"];
    }
}
