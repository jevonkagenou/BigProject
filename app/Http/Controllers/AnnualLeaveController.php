<?php

namespace App\Http\Controllers;
use App\Models\SpecialLeaveAdmin;
use Illuminate\Http\Request;

class AnnualLeaveController extends Controller
{
    public function index()
    {
        return view('Admin.AnnualLeave',[
            'tittle' => 'Cuti Khusus'
        ]);
    }

    public function Create(Request $request)
    {
        // dd($request);
        $this->validate($request,[
            'namakaryawan' => 'required',
            'jenis' => 'required',
            'tglpengajuan' => 'required',
            'tglawal' => 'required',
            'tglakhir' => 'required',
            'keterangan' => 'required',
            'lampiran' => 'required|mimes:pdf',

        ],[
            'namakaryawan.required' => 'Judul Wajib Diisi',
            'jenis.required' => 'Jenis Cuti Wajib Diisi',
            'tglpengajuan.required' => 'Tanggal Pengajuan Wajib Diisi',
            'tglawal.required' => 'Tanggal Awal Cuti Wajib Diisi',
            'tglakhir.required' => 'Tanggal Akhir Cuti Wajib Diisi',
            'keterangan.required' => 'Keterangan Wajib Diisi',
            'lampiran.required' => 'lampiran Wajib Diisi',
        ]);

        // $data = SpecialLeaveAdmin::create([
        // 'namakaryawan' => $request-> namakaryawan,
        // 'jenis' => $request-> jenis,
        // 'tglpengajuan' => $request-> tglpengajuan,
        // 'tglawal' => $request-> tglawal,
        // 'tglakhir' => $request-> tglakhir,
        // 'keterangan' => $request-> keterangan,
        // 'lampiran' => $request-> lampiran,

        // ]);
        $data = new SpecialLeaveAdmin;
        $data->namakaryawan = $request->namakaryawan;
        $data->jenis = $request->jenis;
        $data->tglpengajuan = $request->tglpengajuan;
        $data->tglawal = $request->tglawal;
        $data->tglakhir = $request->tglakhir;
        $data->keterangan = $request->keterangan;
        if($request->hasFile('lampiran')){
            $type = $request->file('lampiran')->getClientOriginalExtension();
            $filename = time().'.'.$type;
            $request->file('lampiran')->move('lampiran/',$filename);
            $data->lampiran = $filename;
        }
        $data->save();

        $data->save();
        // dd($data);
        return redirect()->route('AnnualLeave')->with('success','Data Berhasil Di Tambah');
    }
}
