<?php

namespace App\Http\Controllers;
use App\Models\slip_gaji;
use App\Models\kompdapat;
use App\Models\komppotong;
use Illuminate\Http\Request;

class SlipGajiKomponenController extends Controller
{
    public function index(){

        return view('Admin.AddPaySlips',[
            'tittle' => 'Tambah Slip Gaji'
        ]);
    }

    public function CreateSlips(Request $request){


// dd($request);
        $data = $request->all();

        $slip = new slip_gaji;
        $slip->name = $data['name'];
        $slip->periode = $data['periode'];
        $slip->periode_dimulai = $data['periode_dimulai'];
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

        if (isset($data['nama_komponenptg']) && count($data['nama_komponenptg']) > 0) {
            foreach ($data['nama_komponenptg'] as $index => $komponenData) {
                if($data['uang_potong'][$index]){
                    $komponen = komppotong::create([
                        'nama_id' => $id->id,
                        'nama_komponenptg' => $data['nama_komponenptg'][$index],
                        'tipe_komponenptg' => $data['tipe_komponenptg'][$index],
                        'uang_potong' => $data['uang_potong'][$index],

                    ]);
                }
                    else{
                        $komponen = komppotong::create([
                            'nama_id' => $id->id,
                            'nama_komponenptg' => $data['nama_komponenptg'][$index],
                            'tipe_komponenptg' => $data['tipe_komponenptg'][$index],


                        ]);
                    }
            }
        }

        return redirect()->route('AddPayslips')->with('success', 'Data Anda Telah Ditambahkan');
    }

    public function PayrollSalarySlip(){
        $data = slip_gaji::all();
        return view('Settings.PayrollSalarySlip',[
            'tittle' => 'Slip Gaji'
        ] ,compact('data'));
    }

}
