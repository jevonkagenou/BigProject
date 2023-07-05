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
        Schema::create('special_leave_admins', function (Blueprint $table) {
            $table->id();
            $table->string('namakaryawan');
            $table->string('jenis');
            $table->date('tglpengajuan');
            $table->date('tglawal');
            $table->date('tglakhir');
            $table->longText('keterangan');
            $table->longText('lampiran')->nullabel();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('special_leave_admins');
    }
};
