<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClockSetting extends Model
{
    use HasFactory;

    protected $table = 'clock_setting';
    public $incrementing = false; // Menggunakan tingkat akses publik
    protected $fillable = ['clock_in','late_presence','home_time','overtime_hours','overtime_hours_back',];
}
