<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin Posyandu',
            'email' => 'admin@posyandu.test',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Kader Posyandu',
            'email' => 'kader@posyandu.test',
            'password' => Hash::make('password'),
            'role' => 'kader',
        ]);

        User::create([
            'name' => 'Orang Tua',
            'email' => 'ortu@posyandu.test',
            'password' => Hash::make('password'),
            'role' => 'ortu',
        ]);
    }
}
