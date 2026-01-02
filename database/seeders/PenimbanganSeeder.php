<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penimbangan;
use App\Models\Anak;

class PenimbanganSeeder extends Seeder
{
    public function run(): void
    {
        $anak = Anak::first();

        if ($anak) {
            Penimbangan::create([
                'anak_id' => $anak->id,
                'tanggal' => '2023-06-01',
                'berat_badan' => 8.2,
                'tinggi_badan' => 68.5,
                'keterangan' => 'Normal'
            ]);

            Penimbangan::create([
                'anak_id' => $anak->id,
                'tanggal' => '2023-07-01',
                'berat_badan' => 8.9,
                'tinggi_badan' => 70.0,
                'keterangan' => 'Naik baik'
            ]);
        }
    }
}
