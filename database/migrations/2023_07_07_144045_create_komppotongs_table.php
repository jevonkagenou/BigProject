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
        Schema::create('komppotongs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nama_id')->references('id')->on('slip_gajis')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_komponenptg')->nullable();
            $table->string('tipe_komponenptg')->nullable();
            $table->string('uang_potong')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komppotongs');
    }
};
