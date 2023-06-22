<?php

namespace App\Http\Controllers;

use App\Models\DataEmployee;
use Illuminate\Http\Request;

class DataEmployeeController extends Controller
{
    public function Add_Employee(Request $request){

        $request->validate([
            'longname' => 'required',
            'place_birth' => 'required',
            'date' => 'required',
            'gender' => 'required',
            'marry' => 'required',
            'blood_group' => 'required',
            'region' => 'required',
            'email' => 'required',
            'numberphone' => 'required',
            'address' => 'required',
            'last_study' => 'required',
            'educational_institution' => 'required',
            'study_program' => 'required'
        ]);

        $data = DataEmployee::create([
            'longname' => $request->longname,
            'place_birth' => $request->place_birth,
            'date' => $request->date,
            'gender' => $request->gender,
            'marry' => $request->marry,
            'blood_group'=> $request->blood_group,
            'region' => $request->region,
            'email' => $request->email,
            'numberphone' => $request->numberphone,
            'address' => $request->address,
            'last_study' => $request->last_study,
            'educational_institution' => $request->educational_institution,
            'study_program' => $request->study_program,
        ]);
        return redirect()->route('EmployeeAdmin')->with('success', 'Data Anda Telah Ditambahkan');
    }
}
