<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('work_schedules')->insert([
            'nama_jadwal' => 'jadwal ini',
            'hari_kerja' => '4',
            'hari_libur' => '3',

        ]);

      
    }
}
