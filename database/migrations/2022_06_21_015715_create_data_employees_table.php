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
        Schema::create('data_employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('place_birth');
            $table->date('date');
            $table->string('gender');
            $table->string('marry');
            $table->string('blood_group');
            $table->string('region');
            $table->string('email');
            $table->bigInteger('notelp');
            $table->string('address');
            $table->string('last_study');
            $table->string('educational_institution');
            $table->string('study_program');
            $table->string('foto')->default('user.png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_employees');
    }
};
