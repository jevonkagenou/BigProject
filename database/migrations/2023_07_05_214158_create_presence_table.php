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
        Schema::create('presence', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('enter');
            $table->string('go_home');
            $table->string('overtime');
            $table->string('home_overtime');
            $table->datetime('time');
            $table->boolean('late');
            $table->decimal('wages_per_hour', 10, 2)->nullable(); // Kolom untuk menyimpan tarif gaji lembur per jam
            $table->string('picture');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presence');
    }
};
