<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DateWorkSchedule extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $fillable = ['user_id','shift','date'];
}
