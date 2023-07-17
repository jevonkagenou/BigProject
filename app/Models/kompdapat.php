<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class kompdapat extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $fillable = ['nama_id','nama_komponendpt','tipe_komponendpt','uang_dapat'];

    public function slip() :HasMany
    {
        return $this->hasMany(slip_gaji::class, 'id');
    }

}
