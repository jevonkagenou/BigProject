<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPayroll extends Model
{
    use HasFactory;

    protected $table = 'data_payrolls';
    protected $fillable = ['basic_salary', 'overtime_pay', 'credit_allowance', 'other_allowances', 'cooperative', 'salary_cut', 'lateness', 'total_home_pay', 'total','data_employee_id'];

    public function DataEmployee(){
        return $this->HasMany(DataPayroll::class);
    }
}
