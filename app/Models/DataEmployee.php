<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataEmployee extends Model
{
    use HasFactory;

    protected $table = 'data_employees';
    protected $fillable = ['longname', 'place_birth', 'date', 'gender', 'marry', 'blood_group', 'email', 'region', 'numberphone', 'address', 'last_study', 'educational_institution', 'study_program'];
}
