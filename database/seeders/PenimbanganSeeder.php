<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penimbangan;
use App\Models\Anak;
use Carbon\Carbon;

class PenimbanganSeeder extends Seeder
{
    public function run()
    {
        Penimbangan::truncate();

        foreach (Anak::all() as $anak) {
            for ($i = 1; $i <= 5; $i++) {
                Penimbangan::create([
                    'anak_id' => $anak->id,
                    'tanggal' => Carbon::now()->subMonths(6 - $i),
                    'berat_badan' => 6 + ($i * 0.8),
                    'tinggi_badan' => 60 + ($i * 2.5),
                    'keterangan' => 'Penimbangan rutin',
                ]);
            }
        }
    }
}
