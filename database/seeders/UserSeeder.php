<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "admin",
            'role' => "admin",
            'notelp' => "089637885692",
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        DB::table('users')->insert([
            'name' => "adi",
            'role' => "karyawan",
            'notelp' => "089637885692",
            'email' => 'karyawan@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        DB::table('users')->insert([
            'name' => "gembes",
            'role' => "karyawan",
            'notelp' => "089637885692",
            'email' => 'gembes@gmail.com',
            'password' => bcrypt('12345'),
        ]);
    }
}
