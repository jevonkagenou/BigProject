<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataEmployee extends Model
{
    use HasFactory;

    protected $table = 'data_employees';
    protected $fillable = ['name', 'place_birth', 'date', 'gender', 'marry', 'blood_group', 'email', 'region', 'notelp', 'address', 'last_study', 'educational_institution', 'study_program', 'foto'];

    public function DataPayroll(){
        return $this->hasMany(DataPayroll::class);
    }

    public function Payroll(){
        return $this->hasMany(DataPayroll::class);
    }

    public function OtherAllowances(){
        return $this->hasMany(OtherAllowances::class);
    }

    public function presence()
    {
        return $this->hasMany(Presence::class);
    }
}
