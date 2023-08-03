<?php

namespace App\Imports;

use App\Models\DataPayroll;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PayrollExport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    // public function model(array $row)
    // {
    //     return new DataPayroll([
    //         'slip_gaji_id' => $row['slip_gaji_id'],
    //         'periode' => $row['periode'],
    //         'karyawan' => $row['karyawan'],
    //         'siap_bayar'  => $row['siap_bayar'],
    //         'belum_bayar'  => $row['belum_bayar'],
    //     ]);
    // }
}
