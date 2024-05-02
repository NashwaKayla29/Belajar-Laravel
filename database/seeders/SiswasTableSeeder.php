<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswas = [
            ['nama' => 'nashwa', 'jenis_kelamin' => 'perempuan', 'alamat' => 'tci', 'agama' => 'islam', 'telepon' => 628996, 'email' => 'nshwkyl@gmail.com'],
            ['nama' => 'zahira', 'jenis_kelamin' => 'perempuan', 'alamat' => 'cibaduyut', 'agama' => 'islam', 'telepon' => 62991, 'email' => 'zhira@gmail.com'],
            ['nama' => 'riska', 'jenis_kelamin' => 'perempuan', 'alamat' => 'tarate', 'agama' => 'islam', 'telepon' => 62897, 'email' => 'rskastia@gmail.com'],
            ['nama' => 'silva', 'jenis_kelamin' => 'perempuan', 'alamat' => 'sukamenak', 'agama' => 'islam', 'telepon' => 62891, 'email' => 'slvaaulia@gmail.com'],
            ['nama' => 'kayla', 'jenis_kelamin' => 'perempuan', 'alamat' => 'tci', 'agama' => 'islam', 'telepon' => 62792, 'email' => 'kylsyhwlia@gmail.com'],
            ['nama' => 'siti', 'jenis_kelamin' => 'perempuan', 'alamat' => 'bojong', 'agama' => 'islam', 'telepon' => 624522, 'email' => 'sitiropeah@gmail.com'],
            ['nama' => 'putri', 'jenis_kelamin' => 'perempuan', 'alamat' => 'cibaduyut', 'agama' => 'islam', 'telepon' => 626576, 'email' => 'ptri@gmail.com'],
            ['nama' => 'ika', 'jenis_kelamin' => 'perempuan', 'alamat' => 'bojong', 'agama' => 'islam', 'telepon' => 62238, 'email' => 'ikamu@gmail.com'],
            ['nama' => 'cinta', 'jenis_kelamin' => 'perempuan', 'alamat' => 'bojong', 'agama' => 'islam', 'telepon' => 676438, 'email' => 'cintakuya@gmail.com'],
            ['nama' => 'rara', 'jenis_kelamin' => 'perempuan', 'alamat' => 'bojong', 'agama' => 'islam', 'telepon' => 624256, 'email' => 'rarahujan@gmail.com'],

        ];

        //masukkan data ke database
        DB::table('siswas')->insert($siswas);

        //
    }
}
