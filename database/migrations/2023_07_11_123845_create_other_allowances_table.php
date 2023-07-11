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
        Schema::create('other_allowances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('data_payroll_id')->references('id')->on('data_payrolls')->onDelete('cascade');
            $table->string('other_allwonce_name');
            $table->string('large_ammount_allowance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('other_allowances');
    }
};
