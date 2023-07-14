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
            $table->unsignedBigInteger('slip_gaji_id');
            $table->foreign('slip_gaji_id')->references('id')->on('slip_gajis')->onDelete('cascade');
            $table->bigInteger('basic_salary');
            $table->bigInteger('overtime_pay');
            $table->bigInteger('credit_allowance');
            $table->bigInteger('cooperative')->nullable();
            $table->bigInteger('salary_cut')->nullable();
            $table->bigInteger('lateness')->nullable();
            $table->bigInteger('total')->default(0);
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
