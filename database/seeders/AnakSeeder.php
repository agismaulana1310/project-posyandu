<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Anak;
use App\Models\User;
use Carbon\Carbon;

class AnakSeeder extends Seeder
{
    public function run()
    {

        $ortu = User::where('role', 'ortu')->first();

        $dataAnak = [
            ['Ahmad Rizky','Siti Aminah','L','2022-03-14'],
            ['Aisyah Putri','Nurhayati','P','2021-11-22'],
            ['Muhammad Fajar','Rina Marlina','L','2020-08-05'],
            ['Zahra Khadijah','Dewi Lestari','P','2022-01-30'],
            ['Rafi Pratama','Yuni Astuti','L','2021-05-18'],
            ['Nabila Salsabila','Sri Wahyuni','P','2020-12-10'],
            ['Farhan Akmal','Mila Kurnia','L','2022-04-25'],
            ['Alya Safira','Fitri Handayani','P','2021-09-03'],
            ['Iqbal Maulana','Sulastri','L','2020-07-19'],
            ['Putri Anindya','Lina Oktaviani','P','2022-02-08'],
        ];

        foreach ($dataAnak as $a) {
            Anak::create([
                'nama' => $a[0],
                'nama_ibu' => $a[1],
                'jenis_kelamin' => $a[2],
                'tanggal_lahir' => Carbon::parse($a[3]),
                'user_id' => $ortu->id,
            ]);
        }
    }
}
