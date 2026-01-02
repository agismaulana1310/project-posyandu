<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Imunisasi;
use App\Models\Anak;

class ImunisasiSeeder extends Seeder
{
    public function run(): void
    {
        $anak = Anak::first();

        if ($anak) {
            Imunisasi::create([
                'anak_id' => $anak->id,
                'jenis_imunisasi' => 'BCG',
                'tanggal' => '2023-06-01',
                'keterangan' => 'Imunisasi awal'
            ]);

            Imunisasi::create([
                'anak_id' => $anak->id,
                'jenis_imunisasi' => 'Polio',
                'tanggal' => '2023-07-01',
                'keterangan' => 'Imunisasi lanjutan'
            ]);
        }
    }
}
