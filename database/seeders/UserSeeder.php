<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Role;
use App\Models\User; // Import the User model


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create([
            'name' => 'Admin',
            'guard_name' => 'web'
        ]);
       $admin = User::create([
            'name' => "Admin",
            'notelp' => "089637885692",
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        $admin->assignRole($role);


        $role = Role::create([
            'name' => 'Karyawan',
            'guard_name' => 'web'
        ]);
        $employee = User::create([
            'name' => "Adi",
            'notelp' => "089637885692",
            'email' => 'adi@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        $employee->assignRole($role);
    }
}
