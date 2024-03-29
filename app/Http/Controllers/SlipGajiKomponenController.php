<?php

namespace App\Http\Controllers;
use App\Models\slip_gaji;
use App\Models\kompdapat;
use App\Models\komppotong;
use Illuminate\Http\Request;

class SlipGajiKomponenController extends Controller
{
    public function PayrollSalarySlip(){
        $data = slip_gaji::all();
        return view('Settings.PayrollSalarySlip',[
            'tittle' => 'Slip Gaji'
        ] ,compact('data'));
    }

    // public function index(Request $request){

    //     return view('Admin.AddPaySlips',[
    //         'tittle' => 'Tambah Slip Gaji'
    //     ]);
    // }

    public function CreateSlips(Request $request){


        // dd($request);
        $data = $request->all();

        $slip = new slip_gaji;
        $slip->name = $data['name'];
        $slip->periode = $data['periode'];
        if ($request->input('periode') === 'Tetap (Gaji Bulanan, Mingguan, Persekian gaji)') {
            $slip->periode_dimulai = null;
        } else {
            $slip->periode_dimulai = $request->input('periode_dimulai');
        }

        if ($request->input('periode') === 'Tidak Tetap (THR, Bonus Lebih Dari 1 Bulan)') {
            // Jika tipe "Tidak Tetap", atur kolom periode_tetap dan lamaperiode menjadi NULL
            $slip->periode_tetap = null;
            $slip->lamaperiode = null;
        } else {
            // Jika bukan tipe "Tidak Tetap", tetapkan nilai kolom periode_tetap dan lamaperiode sesuai input pengguna
            $slip->periode_tetap = $request->input('periode_tetap');
            $slip->lamaperiode = $request->input('lamaperiode');
        }
        $slip->save();
        $id = slip_gaji::latest()->first();

        if (isset($data['nama_komponendpt']) && count($data['nama_komponendpt']) > 0) {
            foreach ($data['nama_komponendpt'] as $index => $komponenData) {
                if($data['uang_dapat'][$index]){
                    $komponen = kompdapat::create([
                        'nama_id' => $id->id,
                        'nama_komponendpt' => $data['nama_komponendpt'][$index],
                        'tipe_komponendpt' => $data['tipe_komponendpt'][$index],
                        'uang_dapat' => $data['uang_dapat'][$index],

                    ]);
                }
                    else{
                        $komponen = kompdapat::create([
                            'nama_id' => $id->id,
                            'nama_komponendpt' => $data['nama_komponendpt'][$index],
                            'tipe_komponendpt' => $data['tipe_komponendpt'][$index],


                        ]);
                    }

            }
        }

       if (isset($data['nama_komponenptg']) && is_array($data['nama_komponenptg'])) {
            $namaKomponenPtgCount = count($data['nama_komponenptg']);

            for ($index = 0; $index < $namaKomponenPtgCount; $index++) {
                if ($data['uang_potong'][$index]) {
                    $komponen = komppotong::create([
                        'nama_id' => $id->id,
                        'nama_komponenptg' => $data['nama_komponenptg'][$index],
                        'tipe_komponenptg' => isset($data['tipe_komponenptg'][$index]) ? $data['tipe_komponenptg'][$index] : null,
                        'uang_potong' => $data['uang_potong'][$index],
                    ]);
                } else {
                    $komponen = komppotong::create([
                        'nama_id' => $id->id,
                        'nama_komponenptg' => $data['nama_komponenptg'][$index],
                        'tipe_komponenptg' => isset($data['tipe_komponenptg'][$index]) ? $data['tipe_komponenptg'][$index] : null,
                    ]);
                }
            }
        }


        return redirect()->route('PayrollSalarySlip')->with('success', 'Data Anda Telah Ditambahkan');
    }

}
