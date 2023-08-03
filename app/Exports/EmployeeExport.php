<?php

namespace App\Exports;

use App\Models\DataEmployee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

use Maatwebsite\Excel\Facades\Excel;

class EmployeeExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return DataEmployee::select('name', 'place_birth', 'date', 'gender', 'marry', 'blood_group',
         'email', 'region', 'notelp', 'address', 'last_study', 'educational_institution', 'study_program',
         'foto')->get();
    }

    public function headings(): array
    {
        return["name", "place_birth", "date", "gender", "marry", "blood_group",
        "email", "region", "notelp", "address", "last_study", "educational_institution", "study_program",
        "foto"];
    }
}
