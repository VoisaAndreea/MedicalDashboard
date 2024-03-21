<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@medica.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Test',
            'email' => 'test@medica.com',
            'password' => bcrypt('password'),
        ]);

//        $admin->roles()->attach(1);
    }
}
