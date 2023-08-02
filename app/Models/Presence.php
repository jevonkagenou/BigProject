<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    use HasFactory;

    protected $table = 'presence';
    protected $fillable = ['enter','go_home','overtime','home_overtime','user_id','picture','time','wages','late','employee_id','wages_per_hour'];

    public function User(){
        return $this->belongsTo(User::class,'user_id','id');
    
    }
    public function EmployeePresence(){
        return $this->hasOne(EmployeePresence::class);

    }

    // Tambahkan aksesornya untuk mengambil label status
    public function getStatusLabelAttribute()
    {
        $statuses = [
            1 => 'Belum Siap',
            2 => 'Siap Bayar',
            3 => 'Sudah Bayar',
            // Tambahkan status lainnya sesuai kebutuhan Anda
        ];

        return $statuses[$this->status] ?? 'Tidak Diketahui';
    }
}
