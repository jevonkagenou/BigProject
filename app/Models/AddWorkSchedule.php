<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddWorkSchedule extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $fillable = ['nama_jadwal'];
}
