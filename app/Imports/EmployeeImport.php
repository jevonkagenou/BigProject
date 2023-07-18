<?php

namespace App\Imports;

use App\Models\DataEmployee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeeImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DataEmployee([
            'longname' => $row['longname'],
            'place_birth' => $row['place_birth'],
            'date' => $row['date'],
            'gender'  => $row['gender'],
            'marry'  => $row['marry'],
            'blood_group'  => $row['blood_group'],
            'email'  => $row['email'],
            'region'  => $row['region'],
            'numberphone'  => $row['numberphone'],
            'address'  => $row['address'],
            'last_study'  => $row['last_study'],
            'educational_institution'  => $row['educational_institution'],
            'study_program'  => $row['study_program'],
            'images'  => $row['images'],
        ]);
    }
}
