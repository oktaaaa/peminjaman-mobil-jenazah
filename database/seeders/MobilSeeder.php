<?php

namespace Database\Seeders;

use App\Models\Mobil;
use Illuminate\Database\Seeder;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $mobils = [
            [
                'id' => 2,
                'kode' => 'B123ABC',
                'plat' => 'BG 1234 ABC',
                'brand' => 'Toyota',
                'tahun_rilis' => '2018'
            ],
            [
                'id' => 3,
                'kode' => 'D456DEF',
                'plat' => 'BG 4567 DEF',
                'brand' => 'Honda',
                'tahun_rilis' => '2020'
            ],
            [
                'id' => 4,
                'kode' => 'F789GHI',
                'plat' => 'BG 7890 GHI',
                'brand' => 'Nissan',
                'tahun_rilis' => '2015'
            ],
            [
                'id' => 5,
                'kode' => 'A901JKL',
                'plat' => 'BG 9012 JKL',
                'brand' => 'Mitsubishi',
                'tahun_rilis' => '2019'
            ],


        ];
        foreach ($mobils as $key => $value) {
            $mobils = Mobil::create($value);

        }
    }
}
