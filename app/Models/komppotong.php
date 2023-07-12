<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komppotong extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $fillable = ['nama_id','nama_komponenptg','tipe_komponenptg','uang_potong'];

}
