<?php

namespace Database\Seeders;

use App\Models\ClockSetting;
use App\Models\Presence;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PresenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClockSetting::create([
            'id' => 1,
            'user_id' => 'adi',
            'clock_in' => Carbon::createFromTime(7, 0, 0), // Jam 07:00:00
            'late_presence' => Carbon::createFromTime(8, 0, 0), // Jam 08:00:00
            'home_time' => Carbon::createFromTime(16, 0, 0), // Jam 16:00:00
            'overtime_hours' => Carbon::createFromTime(19, 0, 0), // Jam 19:00:00
            'overtime_hours_back' => Carbon::createFromTime(0, 0, 0), // Jam 00:00:00
        ]);
    }
}
