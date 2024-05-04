<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelis = [
            ['nama_pembeli' => 'jeje', 'jenis_kelamin' => 'perempuan'],
            ['nama_pembeli' => 'neneng', 'jenis_kelamin' => 'perempuan'],
            ['nama_pembeli' => 'ido', 'jenis_kelamin' => 'laki-laki'],
        ];

        //masukkan data ke database
        DB::table('pembelis')->insert($pembelis);

    }
}
