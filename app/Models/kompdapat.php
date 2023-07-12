<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kompdapat extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $fillable = ['nama_id','nama_komponendpt','tipe_komponendpt','uang_dapat'];



}
