<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = Announcement::all();
        return view('Admin.Announcement',[
            'tittle' => 'Pengumuman'
        ] ,compact('data'));
    }

    public function Create(Request $request)
    {
        // dd($request);
        $this->validate($request,[
            'judul' => 'required',
            'isi' => 'required',

        ],[
            'judul.required' => 'Judul Wajib Diisi',
            'isi.required' => 'Isi Pengumuman Wajib Diisi',
        ]);

        $data = new announcement;
        $data->judul = $request->judul;
        $data->isi = $request->isi;
        if($request->hasFile('lampiran')){
            $type = $request->file('lampiran')->getClientOriginalName();
            $filename = time().'.'.$type;
            $request->file('lampiran')->move('gambar/',$filename);
            $data->lampiran = $filename;
        }

        if($request->hasFile('pdf')){
            $type = $request->file('pdf')->getClientOriginalExtension();
            $filename = time().'.'.$type;
            $request->file('pdf')->move('pdf/',$filename);
            $data->lampiran = $filename;
        }
        $data->save();

        return redirect()->route('Announcement')->with('success','Data Berhasil Di Tambah');
    }

    public function search(Request $request)
    {
        $date = $request->created_at;
        // $formattedDate = \Carbon\Carbon::createFromFormat($date);

        $data = Announcement::where('created_at', 'like', '%' . $date . '%')->get();

        // return view('Admin.Announcement')->with('results', $results)->withInput();
        return view('Admin.Announcement',[
            'tittle' => 'Pengumuman'
        ] ,compact('data'));
    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Announcement::find($id);
        $data->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);
        if($request->hasFile('lampiran')){
            $type = $request->file('lampiran')->getClientOriginalName();
            $filename = time().'.'.$type;
            $request->file('lampiran')->move('gambar/',$filename);
            $data->lampiran = $filename;
            $data->save();
        }

        return redirect()->route('Announcement')->with('success','Data Berhasil Di Edit');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Announcement::find($id);
        $data->delete();
        return redirect()->route('Announcement');
    }
}
