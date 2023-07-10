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
        Schema::create('start_payrolls', function (Blueprint $table) {
        $table->id();
        $table->string('slip');
        $table->string('periode');
        $table->Integer('karyawan');
        $table->string('siap_bayar');
        $table->string('belum_bayar');

        $table->timestamps();
    });

      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('start_payrolls');
    }
};
