<?php

namespace App\Http\Controllers;
use App\Models\PermitEmployee;


use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function DashboardAdmin()
{
    $data = PermitEmployee::latest('created_at')
            ->limit(5)
            ->get();

    return view('DashboardAdmin.DashboardAdmin', compact('data'), [
        'title' => 'Beranda'
    ]);
}


}