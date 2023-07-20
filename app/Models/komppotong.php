<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class komppotong extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $fillable = ['nama_id','nama_komponenptg','tipe_komponenptg','uang_potong'];

    public function slip() :BelongsTo
    {
        return $this->belongsTo(slip_gaji::class,'nama_id');
    }
}
