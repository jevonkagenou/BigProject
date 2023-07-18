<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class slip_gaji extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $fillable = ['name','periode','periode_dimulai'];

    public function DataPayroll(){
        return $this->HasMany(DataPayroll::class);
    }
    public function kompdapats()
    {
        return $this->hasMany(kompdapat::class, 'id');
    }
    public function komppotong()
    {
        return $this->hasMany(komppotong::class,'id');
    }
}
