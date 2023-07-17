<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function DataEmployee()
    {
        return $this->belongsTo(DataEmployee::class, 'data_employee_id');
    }
    public function dataPayroll()
    {
        return $this->hasOne(DataPayroll::class);
    }

}
