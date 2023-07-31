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
        Schema::create('clock_setting', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->time('clock_in');
            $table->time('late_presence');
            $table->time('home_time');
            $table->time('overtime_hours');
            $table->time('overtime_hours_back');
            $table->bigInteger('id')->default(1)->change();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clock_setting', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
};
