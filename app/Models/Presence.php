<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    use HasFactory;

    protected $table = 'presence';
    protected $fillable = ['enter','go_home','overtime','home_overtime','user_id','picture','time','wages','late','employee_id'];

    public function User(){
        return $this->belongsTo(User::class,'user_id','id');
    
    }
    public function EmployeePresence(){
        return $this->hasOne(EmployeePresence::class);

    }
}
