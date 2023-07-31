<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddWorkSchedule extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $fillable = ['user_id'];

    public function Dateworkschedule()
    {
        return $this->belongsTo(DateWorkSchedule::class);
    }

}