<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank extends Model
{
    use HasFactory;

    protected $guarded =[];
    protected $fillable = [
        'nama_bank',
        'no_reg',
        'foto',
    ];
}
