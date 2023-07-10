<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_payrolls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_employee_id');
            $table->foreign('data_employee_id')->references('id')->on('data_employees')->onDelete('cascade');
            $table->bigInteger('basic_salary');
            $table->bigInteger('overtime_pay');
            $table->bigInteger('credit_allowance');
            $table->bigInteger('other_allowances');
            $table->bigInteger('cooperative');
            $table->bigInteger('salary_cut');
            $table->bigInteger('lateness');
            $table->bigInteger('total_home_pay');
            $table->bigInteger('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_payrolls');
    }
};
