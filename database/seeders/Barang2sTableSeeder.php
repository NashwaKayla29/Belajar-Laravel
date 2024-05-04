<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Barang2sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang2s = [
            ['nama_barang' => 'dompet', 'harga' => 200000, 'stok' => 30],
            ['nama_barang' => 'kursi', 'harga' => 30000, 'stok' => 28],
            ['nama_barang' => 'laptop', 'harga' => 10000, 'stok' => 100],
        ];

//masukkan data ke database
        DB::table('barang2s')->insert($barang2s);

    }
}
