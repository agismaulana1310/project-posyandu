<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Imunisasi;
use App\Models\Anak;
use Carbon\Carbon;

class ImunisasiSeeder extends Seeder
{
    public function run()
    {
        Imunisasi::truncate();

        $jenis = ['BCG','Polio','DPT'];

        foreach (Anak::all() as $anak) {
            foreach ($jenis as $i => $j) {
                Imunisasi::create([
                    'anak_id' => $anak->id,
                    'jenis_imunisasi' => $j,
                    'tanggal' => Carbon::parse($anak->tanggal_lahir)->addMonths(($i+1)*2),
                    'keterangan' => 'Imunisasi '.$j,
                ]);
            }
        }
    }
}
