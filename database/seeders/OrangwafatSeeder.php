<?php

namespace Database\Seeders;

use App\Models\Orangwafat;
use Illuminate\Database\Seeder;

class OrangwafatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $orangwafats = [
            [
                'id' => 1,
                'nik' => '3161012304900001',
                'nama_jenazah' => 'Zulkarnain',
                'jk' => 'Laki-Laki',
                'alamat_jenazah' => 'LR. PRATU MUSA KEL. EMPAT-BELAS ULU',
                'alamat_penjemputan' => 'RS. BUNDA PALEMBANG',
                'tuj_makam' => 'TPU NAGASWIDAK',

            ],
            [
                'id' => 2,
                'nik' => '3161012304900002',
                'nama_jenazah' => 'Diana',
                'jk' => 'Perempuan',
                'alamat_jenazah' => 'LR. PERTAHANAN 3 KEL- ENAM-BELAS ULU',
                'alamat_penjemputan' => 'LR. PERTAHANAN 3 KEL- ENAM-BELAS ULU',
                'tuj_makam' => 'TPU MAHAMERU',

            ],
            [
                'id' => 3,
                'nik' => '3161012304900003',
                'nama_jenazah' => 'Rahmadi',
                'jk' => 'Laki-Laki',
                'alamat_jenazah' => 'LR. KELAPA 6 RT. 68 KEL. ENAM-BELAS ULU',
                'alamat_penjemputan' => 'LR. KELAPA 6 RT. 68 KEL. ENAM-BELAS ULU',
                'tuj_makam' => 'TPU NAGASWIDAK',

            ]

        ];

        foreach ($orangwafats as $key => $value) {
            $orangwafats = Orangwafat::create($value);

        }
    }
}
