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
        return $this->belongsTo(DataEmployee::class, 'data_employee_id');
    }

    public function slip_gaji(){
        return $this->belongsTo(slip_gaji::class);
    }
    public function payroll()
    {
        return $this->belongsTo(Payroll::class);
    }
    public function kompdapats()
    {
        return $this->hasMany(kompdapat::class, 'payroll_id');
    }
    public function Komppotong()
    {
        return $this->belongsTo(komppotong::class, 'uang_potong');
    }
}
