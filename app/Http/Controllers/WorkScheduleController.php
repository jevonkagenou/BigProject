<?php

namespace App\Http\Controllers;

use App\Models\WorkSchedule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkScheduleController extends Controller
{
    public function WorkSchedule(){
        $data = WorkSchedule::all();
       return view('Admin.WorkSchedule', compact('data'));
    }
   
    public function tampiledit(Request $request, $id){
         $data = WorkSchedule::find($id);
         return redirect()->route('WorkSchedule')->with('Sukses','Data Berhasil Di Update');

    }
    
    public function updatejadwalkerja(Request $request, $id){
        $data = WorkSchedule::find($id);
        $data->update($request->all());
        return redirect()->route('WorkSchedule')->with('success','Data Berhasil Di Update');

    }

    public function updatejadwal(Request $request)
{
    $id = explode(',', $request->id_schedule);
    
    if (count($id) === 0) {
        return redirect()->back()->with('error', 'Tidak ada postingan yang dipilih');
    }
    
    foreach ($id as $i) {
        $work = WorkSchedule::where('id', $i)->update(['nama_jadwal' => $request->nama_jadwal]);
    }

    return redirect()->back()->with('success', 'Data berhasil diperbarui');
}

    
       

    public function deleteWorkSchedule($id){
       $data = WorkSchedule::find($id);
       $data->delete();
       return redirect()->route('WorkSchedule')->with('Sukses', 'Data Berhasil Di Hapus');
    }
}