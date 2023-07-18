<?php

namespace App\Http\Controllers;

use App\Models\DataEmployee;
use Illuminate\Http\Request;
use App\Exports\EmployeeExport;
use App\Imports\EmployeeImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
class DataEmployeeController extends Controller
{
    public function UpdateEmployee(){
        return view('Admin.UpdateEmployee',[
            'tittle'=>'Edit Karyawan'
        ]);
    }

    public function Add_Employee(Request $request){
        // dd($request);
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
            'study_program' => 'required',
            'study_program' => 'required',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif|'
        ]);

        if ($files = $request->file('images')) {
        $extension = $files->getClientOriginalExtension();
        $name = hash('sha256', time()) . '.' . $extension;
        $files->move('images', $name);
            }

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
            'images' => $name
        ]);
        return redirect()->route('EmployeeAdmin', compact('data'))->with('success', 'Data Anda Telah Ditambahkan');
    }

    public function Update_Employee(Request $request, $id){

    $data = DataEmployee::find($id);
    $data->update([
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

    $data->save();

    return redirect()->route('EmployeeAdmin')->with('success', 'Data karyawan berhasil diperbarui');
}



    public function Add_Image(Request $request){
        $request ->validate([
            'images' => 'required|image|file|'
        ]);
        if ($files = $request->file('images')) {
            $extension = $files->getClientOriginalExtension();
            $name = hash('sha256', time()) . '.' . $extension;
            $files->move('images', $name);
        }

        $data = DataEmployee::create([
            'images' => $name
        ]);

    if ($request->hasFile('images')) {
        $image = $request->file('images');
        $name = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images'), $name);
    }

    $data = DataEmployee::create([
        'images' => $name
    ]);

    return redirect()->back()->with('success', 'Image uploaded successfully.');
}

    public function Update_Image(Request $request, $id){
        $request ->validate([
            'images' => 'required|image|file|'
        ]);
        if ($files = $request->file('images')) {
            $extension = $files->getClientOriginalExtension();
            $name = hash('sha256', time()) . '.' . $extension;
            $files->move('images', $name);
        }
        $data = DataEmployee::where('id', $id)->update([
            'images' => $name
        ]);

        return redirect()->back()->with('success', 'Data Berhasil Diupdate');
    }

    public function Delete_Image($id){
        DataEmployee::where('id', $id)->update(['images/' => null]);

        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }

    public function Employee($id){
        $order = DataEmployee::find($id);
        return view('EmployeeDetails.Employee', compact('order'));
    }
    public function hapus($id)
    {
        $data = DataEmployee::find($id);
        $data->delete();
        return redirect()->route('EmployeeAdmin');
    }


    public function empoyeeexport(){
        return Excel::download(new EmployeeExport,'employee.xlsx');
    }


}
