<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Anak;

class AnakSeeder extends Seeder
{
    public function run(): void
    {
        Anak::create([
            'nama' => 'Budi',
            'tanggal_lahir' => '2022-01-10',
            'jenis_kelamin' => 'L',
            'nama_ibu' => 'Siti'
        ]);

        Anak::create([
            'nama' => 'Aisyah',
            'tanggal_lahir' => '2021-11-05',
            'jenis_kelamin' => 'P',
            'nama_ibu' => 'Aminah'
        ]);

        Anak::create([
            'nama' => 'Rizki',
            'tanggal_lahir' => '2023-03-18',
            'jenis_kelamin' => 'L',
            'nama_ibu' => 'Dewi'
        ]);
    }
}
