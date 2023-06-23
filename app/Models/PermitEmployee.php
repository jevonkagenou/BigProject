<?php

namespace App\Models;

use App\Model\DataEmployee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermitEmployee extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function User(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
