<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slip_gaji extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $fillable = ['name','periode','periode_dimulai'];

}
