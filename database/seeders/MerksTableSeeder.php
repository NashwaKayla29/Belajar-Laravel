<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $merks = [
            ['nama_merk' => 'nestle'],
            ['nama_merk' => 'mama suka'],
            ['nama_merk' => 'indofood'],
        ];

        //masukkan data ke database
        DB::table('merks')->insert($merks);

        //
    }
}
