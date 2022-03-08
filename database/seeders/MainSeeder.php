<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama' => 'Judha Maygustya',
                'judul_video' => 'Belajar Laravel',
            ],
            [
                'nama' => 'Mahisa Aghisni Fadhli',
                'judul_video' => 'Belajar Praktikum Web Lanjut',
            ]
        ];
        DB::table('mains')->insert($data);
    }
}
