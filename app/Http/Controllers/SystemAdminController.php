<?php

namespace App\Http\Controllers;

use App\Models\bank;
use App\Models\Rekening;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SystemAdminController extends Controller
{
    public function ProfilAdmin($id)
    {
        $admin = User::find($id);
        // dd($admin);
        return view('Admin.ProfilAdmin', compact('admin'),[
            'tittle'=>'Profil Admin'
        ]);
    }
    public function ProfileEmployee($id)
    {
        $karyawan = User::find($id);
        // dd($admin);
        return view('Karyawan.ProfileEmployee', compact('karyawan'),[
            'tittle'=>'Profil Karyawan'
        ]);
    }

    public function updateProfile(Request $request, $id)
    {
        $admin = User::find($id);
        $admin->email = $request->email;
        $admin->name = $request->name;
        $admin->notelp = $request->notelp;
        $admin->save();
    
        return redirect()->back()->with('success', 'Profil berhasil diedit');
    }
    
    public function updateFotoadmin(Request $request, string $id)
    {
        $admin = User::find($id);
    
        if ($request->hasFile('foto')) {
            $type = $request->file('foto')->getClientOriginalExtension();
            $filename = time() . '.' . $type;
            $request->file('foto')->move('gambar/', $filename);
            $admin->foto = $filename;
            $admin->save();
        }
    
        return redirect()->back()->with('success', 'Foto profil berhasil diubah');
    }
    
    
    public function delete($id)
    {
        $admin = User::find($id);
        $gambar = $admin->foto;
        $admin->delete();
        return redirect()->back()->with('success', 'Profile berhasil di hapus');
    }
    
    public function updateProfileEmployee(Request $request, $id)
    {
            $karyawan = User::find($id);
            $request->validate([
                'name' => 'required',
                'notelp' =>'required|max:15',
            ],
            [
                'name.required'=>'Nama wajib diisi',
                'notelp.required'=>'No telpon wajib diisi',
                'notelp.max'=>'No telpon tidak boleh lebih dari 15',
            ]);
            $karyawan->update($request->all());
            return redirect()->back()->with('success', 'Profile berhasil di edit');
    }

    public function UpdateFotoEmployee(Request $request, string $id)
    {
        $karyawan = User::find($id);
    
        if ($request->hasFile('foto')) {
            $type = $request->file('foto')->getClientOriginalExtension();
            $filename = time() . '.' . $type;
            $request->file('foto')->move('gambar/', $filename);
            $karyawan->foto = $filename;
            $karyawan->save();
        }
    
        return redirect()->back()->with('success', 'Foto profil berhasil diubah');
    }
    
    public function delete2($id)
    {
        $karyawan = User::find($id);
        $gambar = $karyawan->foto;
        $karyawan->delete();
        return redirect()->back()->with('success', 'Profile berhasil di hapus');
    }

        public function changePassword(Request $request, $id)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'new_password_confirmation' => 'required|same:new_password',
        ], [
            'current_password.required' => 'Current Password is required',
            'new_password.required' => 'New Pasword is required',
            'new_password_confirmation.required' => 'Password baru required',
            'new_password_confirmation.same' => 'Konfirmasi Password is incorrect',
            // dd($request)
        ]);


        $user = User::find($id);
        $current_password = $user->password;
        if (Hash::check($request->current_password, $current_password)) {
            $user->update([
                'password' => Hash::make($request->new_password)
            ]);
            // Auth::logout();
            // return redirect()->route('login')->with('success', 'Password changed successfully.');
            return redirect()->route('DashboardAdmin')->with('status', '');
        } else {
            return redirect()->route('DashboardAdmin')->with('status', '');
        }
    }
    
    public function changePasswordEmployee(Request $request, $id)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'new_password_confirmation' => 'required|same:new_password',
        ], [
            'current_password.required' => 'Current Password is required',
            'new_password.required' => 'New Pasword is required',
            'new_password_confirmation.required' => 'Password baru required',
            'new_password_confirmation.same' => 'Konfirmasi Password is incorrect',
            // dd($request)
        ]);


        $user = User::find($id);
        $current_password = $user->password;
        if (Hash::check($request->current_password, $current_password)) {
            $user->update([
                'password' => Hash::make($request->new_password)
            ]);
            // Auth::logout();
            // return redirect()->route('login')->with('success', 'Password changed successfully.');
            return redirect()->route('DashboardEmployee')->with('status', 'Invalid current password');
        } else {
            return redirect()->route('DashboardEmployee')->with('status', 'Invalid current password');
        }
    }

    public function updategambarProfile(Request $request, $id)
    {
        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $admin = User::findOrFail($id);
        // dd($admin);
        
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/profile', $filename);
            $admin->foto = $filename;
        }
        
        $admin->save();
        
        return redirect()->back()->with('success', 'Gambar profil berhasil diperbarui');
        
    }

    public function insertrekening(Request $request)
    {
        $rekening = bank::where('norekening', $request->norekening)->first();
        
        if ($rekening) {
            // Jika data rekening dengan nomor rekening yang sama sudah ada, tampilkan pesan error atau lakukan tindakan yang sesuai.
            return redirect()->back()->with('error', 'Data rekening dengan nomor rekening tersebut sudah ada.');
        }
        
        $rekening = new bank;
        $rekening->namabank = $request->namabank;   
        $rekening->norekening = $request->norekening;
        $rekening->namapemegang = $request->namapemegang;
        
        // Menghandle file gambar yang diunggah
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('public/images', $filename); // Menyimpan file gambar ke direktori storage
            
            // Menyimpan path gambar ke kolom 'foto' dalam tabel Rekening
            $rekening->foto = 'storage/images/'.$filename;
        }
        
        $rekening->save();
    
        return redirect()->route('AddAccount')->with('success', 'Data rekening berhasil ditambahkan');
    }
    
}
