<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Tambahkan data pengguna default
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'), // Password default
            'role' => 'admin',
            'gender' => 'LAKI-LAKI',
            'birth_date' => '1990-01-01',
        ]);

        User::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'password' => Hash::make('password123'),
            'role' => 'user',
            'gender' => 'PEREMPUAN',
            'birth_date' => '1995-05-15',
        ]);

        User::create([
            'name' => 'John Smith',
            'email' => 'john@example.com',
            'password' => Hash::make('password123'),
            'role' => 'user',
            'gender' => 'LAKI-LAKI',
            'birth_date' => '1988-10-20',
        ]);
    }
}