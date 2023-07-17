<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPayroll extends Model
{
    use HasFactory;

    protected $table = 'data_payrolls';
    protected $fillable = [
        'data_employee_id',
        'slip_gaji_id',
        'basic_salary',
        'overtime_pay',
        'credit_allowance',
        'cooperative',
        'salary_cut',
        'lateness',
        'total'
    ];


    public function DataEmployee(){
        return $this->HasMany(DataPayroll::class);
    }

    public function slip_gaji(){
        return $this->belongsTo(slip_gaji::class);
    }
    public function payroll()
    {
        return $this->belongsTo(Payroll::class);
    }

}
