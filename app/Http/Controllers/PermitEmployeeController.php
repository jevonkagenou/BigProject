<?php

namespace App\Http\Controllers;

use App\Models\PermitEmployee;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PermitEmployeeController extends Controller
{
    public function Add_Permit(Request $request)
    {
        $request->validate([
            'submission_date' => 'required',
            'date_leave' => 'required',
            'pilihan' => 'required',
            'description' => 'required'
        ]);
    
        $date1 = Carbon::parse($request->input('submission_date'));
        $date2 = Carbon::parse($request->input('date_leave'));
    
        $total_day = $date2->diffInDays($date1);
        
        $data = PermitEmployee::create([
            'user_id' => $request->user_id,
            'submission_date' => $request->submission_date,
            'date_leave' => $request->date_leave,
            'tipe' => $request->pilihan,
            'total_day' => $total_day,
            'description' => $request->description
        ]);
    
        // Lakukan tindakan lain yang diperlukan setelah data izin ditambahkan
    
        return response()->json(['message' => 'Permit added successfully', 'data' => $data], 201);
    }
}
