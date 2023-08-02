<?php

namespace App\Http\Controllers;

use App\Models\DataEmployee;
use Illuminate\Http\Request;
use App\Exports\EmployeeExport;
use App\Imports\EmployeeImport;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class DataEmployeeController extends Controller
{
    public function UpdateEmployee(){
        return view('Admin.UpdateEmployee',[
            'tittle'=>'Edit Karyawan'
        ]);
    }

    public function Add_Employee(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3|max:255',
            'place_birth' => 'required',
            'date' => 'required',
            'gender' => 'required',
            'marry' => 'required',
            'blood_group' => 'required',
            'region' => 'required',
            'email' => 'required|email|unique:users,email', // Memastikan email unik di tabel users
            'notelp' => 'required|numeric',
            'address' => 'required',
            'last_study' => 'required',
            'educational_institution' => 'required',
            'study_program' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        try {
            DB::beginTransaction();

            // Simpan foto yang diunggah oleh pengguna
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $extension = $file->getClientOriginalExtension();
                $name = hash('sha256', time()) . '.' . $extension;
                $file->move('foto', $name);
            } else {
                $name = 'user.png';
            }

            $user = User::create([
                'email' => $request->input('email'),
                'password' => \Hash::make('12345'),
                'name' => $request->input('name'),
                'notelp' => $request->input('notelp'),
                'foto' => $name,
            ]);

            $data = DataEmployee::create([
                'name' => $request->name,
                'place_birth' => $request->place_birth,
                'date' => $request->date,
                'gender' => $request->gender,
                'marry' => $request->marry,
                'blood_group' => $request->blood_group,
                'region' => $request->region,
                'email' => $request->email,
                'notelp' => $request->notelp,
                'address' => $request->address,
                'last_study' => $request->last_study,
                'educational_institution' => $request->educational_institution,
                'study_program' => $request->study_program,
                'foto' => $name,
            ]);
            dd($data, $user);
            DB::commit();
            return redirect()->route('EmployeeAdmin')->with('success', 'Data Anda Telah Ditambahkan');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data.');
        }
    }

    public function editemployee($id){
        $data = DataEmployee::find($id);
        return view('Admin.UpdateEmployee', compact('data'));
    }

    public function Update_Employee(Request $request, $id)
{
    $data = DataEmployee::find($id);

    if (!$data) {
        // Jika data dengan ID yang dimaksud tidak ditemukan
        return redirect()->route('EmployeeAdmin')->with('error', 'Data karyawan tidak ditemukan.');
    }

    $data->update([
        'name' => $request->name,
        'place_birth' => $request->place_birth,
        'date' => $request->date,
        'gender' => $request->gender,
        'marry' => $request->marry,
        'blood_group' => $request->blood_group,
        'region' => $request->region,
        'email' => $request->email,
        'notelp' => $request->notelp,
        'address' => $request->address,
        'last_study' => $request->last_study,
        'educational_institution' => $request->educational_institution,
        'study_program' => $request->study_program,
    ]);

    return redirect()->route('EmployeeAdmin')->with('success', 'Data karyawan berhasil diperbarui');
}

    public function Add_Image(Request $request){
        $request ->validate([
            'foto' => 'required|image|file|'
        ]);
        if ($files = $request->file('foto')) {
            $extension = $files->getClientOriginalExtension();
            $name = hash('sha256', time()) . '.' . $extension;
            $files->move('foto', $name);
        }

        $data = DataEmployee::create([
            'foto' => $name
        ]);

    if ($request->hasFile('foto')) {
        $image = $request->file('foto');
        $name = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('foto'), $name);
    }

    $data = DataEmployee::create([
        'foto' => $name
    ]);

    return redirect()->back()->with('success', 'Image uploaded successfully.');
}

    public function Update_Image(Request $request, $id){
        $request ->validate([
            'foto' => 'required|image|file|'
        ]);
        if ($files = $request->file('foto')) {
            $extension = $files->getClientOriginalExtension();
            $name = hash('sha256', time()) . '.' . $extension;
            $files->move('foto', $name);
        }
        $data = DataEmployee::where('id', $id)->update([
            'foto' => $name
        ]);

        return redirect()->back()->with('success', 'Data Berhasil Diupdate');
    }

    public function Delete_Image($id){
        DataEmployee::where('id', $id)->update(['foto/' => null]);

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
