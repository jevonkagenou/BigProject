<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherAllowances extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function DataEmployees(){
        return $this->belongsTo(DataEmployees::class);
    }
}
