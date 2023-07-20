<?php

namespace App\Http\Controllers;

use App\Models\bank;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function AddAccount()
    {
        $data = bank::all();

        return view('Settings.AddAccount',compact('data'),[
            'tittle'=>'Tambah Rekening'
        ]);
    }
    public function InsertAccount(Request $request)
    {
            // Menyimpan data customer beserta foto ke dalam database

            bank::create([
                'nama_bank' => $request->nama_bank,
                'no_reg' => $request->no_reg,
            ]);

        return redirect()->back();
    }
}
