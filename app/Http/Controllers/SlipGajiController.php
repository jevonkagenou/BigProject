<?php

namespace App\Http\Controllers;

use App\Models\komponen_dapat;
use App\Models\komponen_potong;
use App\Models\slip_gaji;


use Illuminate\Http\Request;

class SlipGajiController extends Controller
{
    public function Createslipgaji(Request $request){

    }

    // public function slipgaji()
    // {
    //     $data = slip_gaji::all();
    //     // dd($data);
    //     $dapat = komponen_dapat::all();
    //     $potong = komponen_potong::all();
    //     return view('Admin.AddPayslips', compact('data', 'dapat', 'potong'), [
    //         'tittle' => 'Tambah Slip Gaji'
    //     ]);
    // }
    // public function insertdapat(Request $request)
    // {
    //     $request->validate([
    //         'nama_komponendpt' => 'required',
    //         'tipe_komponendpt' => 'required',
    //         'uang_dapat' => 'nullable',
    //     ], [
    //         'nama_komponendpt.required' => 'Nama komponen pendapatan tidak boleh kosong',
    //         'tipe_komponendpt.required' => 'Tipe komponen pendapatan tidak boleh kosong',
    //     ]);

    //     $dpt = komponen_dapat::create([

    //         'nama_komponendpt' => $request->nama_komponendpt,
    //         'tipe_komponendpt' => $request->tipe_komponendpt,
    //         'uang_dapat' => $request->uang_dapat,

    //     ]);
    //     $dpt->save();
    //     return redirect()->back();
    // }
    // public function inserpotong(Request $request)
    // {
    //     $request->validate([
    //         'nama_komponenptg' => 'required',
    //         'tipe_komponenptg' => 'required',
    //         'uang_potong' => 'nullable',
    //     ], [
    //         'nama_komponenptg.required' => 'Nama komponen pendapatan tidak boleh kosong',
    //         'tipe_komponenptg.required' => 'Tipe komponen pendapatan tidak boleh kosong',
    //     ]);

    //     $ptg = komponen_potong::create([

    //         'nama_komponenptg' => $request->nama_komponenptg,
    //         'tipe_komponenptg' => $request->tipe_komponenptg,
    //         'uang_potong' => $request->uang_potong,

    //     ]);
    //     $ptg->save();
    //     return redirect()->back();
    // }

    // public function editdpt(Request $request, $id){
    //     $dapat = komponen_dapat::find($id);
    //     $request->validate([
    //         'nama_komponendpt' => 'required',
    //         'tipe_komponendpt' => 'required',
    //         'uang_dapat' => 'nullable',
    //     ], [
    //         'nama_komponendpt.required' => 'Nama komponen pendapatan tidak boleh kosong',
    //         'tipe_komponendpt.required' => 'Tipe komponen pendapatan tidak boleh kosong',
    //     ]);
    //     $dapat->update ([
    //         'nama_komponendpt' => $request->nama_komponendpt,
    //         'tipe_komponendpt' => $request->tipe_komponendpt,
    //         'uang_dapat' => $request->uang_dapat,

    //     ]);
    //     return redirect()->back();
    // }
    // public function editptg(Request $request, $id){
    //     $potong = komponen_potong::find($id);
    //     $request->validate([
    //         'nama_komponenptg' => 'required',
    //         'tipe_komponenptg' => 'required',
    //         'uang_potong' => 'nullable',
    //     ], [
    //         'nama_komponenptg.required' => 'Nama komponen pemotongan tidak boleh kosong',
    //         'tipe_komponenptg.required' => 'Tipe komponen pemotongan tidak boleh kosong',
    //     ]);
    //     $potong->update ([
    //         'nama_komponenptg' => $request->nama_komponenptg,
    //         'tipe_komponenptg' => $request->tipe_komponenptg,
    //         'uang_potong' => $request->uang_potong,

    //     ]);
    //     return redirect()->back();
    // }
    // public function deletekomdap($id){
    //     $data = komponen_dapat::find($id);
    //     $data -> delete();
    //     return redirect()->back();
    // }
    // public function deletekomptg($id){
    //     $data = komponen_potong::find($id);
    //     $data -> delete();
    //     return redirect()->back();
    // }

    // public function insertslipgaji(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'periode' => 'required',
    //         'periode_dimulai' => 'required',
    //         'nama_komponendpt' => 'nullable',
    //         'tipe_komponendpt' => 'nullable',
    //         'uang_dapat' => 'nullable',
    //         'nama_komponenptg' => 'nullable',
    //         'tipe_komponenptg' => 'nullable',
    //         'uang_potong' => 'nullable',
    //     ], [
    //         'name.required' => 'Nama Pendapatan tidak booleh kosong',
    //         'periode.required' => 'Periode harus di isi',
    //         'periode_dimulai.required' => 'Periode dimulai harus di isi',
    //     ]);
    //     // $dapat=$request->nama_komponendpt;
    //     foreach ($request->nama_komponendpt as $key => $value) {
    //         slip_gaji::create([
    //             'name' => $request->name,
    //             'periode' => $request->periode,
    //             'periode_dimulai' => $request->periode_dimulai,
    //             'nama_komponendpt' => $value,
    //             'tipe_komponendpt' => $request->tipe_komponendpt[$key],
    //             'uang_dapat' => $request->uang_dapat[$key],
    //             'nama_komponenptg' => $request->nama_komponenptg[$key],
    //             'tipe_komponenptg' => $request->tipe_komponenptg[$key],
    //             'uang_potong' => $request->uang_potong[$key],
    //         ]);
    //     }
    //     $slipgaji->save();
    //     return redirect()->back();
    // }
}
