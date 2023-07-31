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
        Schema::create('date_work_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('add_work_schedules')->onUpdate('cascade')->onDelete('cascade');
            $table->string('shift');
            $table->string('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('date_work_schedules');
    }
};