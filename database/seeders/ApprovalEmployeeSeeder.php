<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ApprovalEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('approval_employees')->insert([
           'tipe' => 'Sakit',
           'waktu' => '2023-06-29 15:30:45',
           'status' => 'Diproses',

        ]);
    }
}
