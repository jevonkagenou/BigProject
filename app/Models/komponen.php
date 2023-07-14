<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komponen extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $fillable = ['nama_id','nama_komponendpt',['nama_komponenptg','tipe_komponendpt','tipe_komponenptg','uang_dapat','uang_potong']];

}
