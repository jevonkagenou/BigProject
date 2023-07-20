<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankController extends Controller
{
    public function AddAccount(Request $request)
    {
        $rekeningList = bank::create([
            
        ]);
        return view('Settings.AddAccount', compact('rekeningList'),[
            'tittle'=>'Tambah Rekening'
        ]);
    }
}
