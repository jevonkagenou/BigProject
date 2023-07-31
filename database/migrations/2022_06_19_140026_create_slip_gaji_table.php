<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('slip_gajis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            //tetap tdk tetap
            $table->string('periode');

            $table->date('periode_dimulai')->nullable();
            $table->string('periode_tetap')->nullable();
            $table->string('lamaperiode')->nullable();

            // $table->foreign('komponen_dapat')->references('id')
            //     ->on('komponen_dapats')
            //     ->onUpdate('cascade')->onDelete('restrict')->nullable();

            // $table->foreign('komponen_potong')->references('id')
            //     ->on('komponen_potongs')
            //     ->onUpdate('cascade')->onDelete('restrict')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slip_gaji');
    }
};
