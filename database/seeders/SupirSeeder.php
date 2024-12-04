<?php

namespace Database\Seeders;

use App\Models\Supir;
use Illuminate\Database\Seeder;

class SupirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $supirs = [
            [
                'id' => 2,
                'nik' => '3271012304900001',
                'nama' => 'Ahmad Budiman',
                'alamat' => 'Jl. Anggrek No. 1',
                'tgl_lahir' => '1990-04-04',
                'no_hp' => '081234567890',
                'jk' => 'Laki-Laki'
            ],
            [
                'id' => 3,
                'nik' => '3171032105800002',
                'nama' => 'Andi Pratama',
                'alamat' => 'Perumahan Harapan Baru Blok B No.5',
                'tgl_lahir' => '1992-05-21',
                'no_hp' => '085398765432',
                'jk' => 'Laki-Laki'
            ],


        ];
        foreach ($supirs as $key => $value) {
            $supirs = Supir::create($value);
            
        }
    }
}
