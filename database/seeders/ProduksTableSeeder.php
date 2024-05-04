<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['nama_produk' => 'bubur bayi', 'jumlah' => '90', 'tanggal_produksi' => '2023-12-01', 'merk_id' => '1'],
            ['nama_produk' => 'rumput laut', 'jumlah' => '6', 'tanggal_produksi' => '2024-08-12', 'merk_id' => '1'],
            ['nama_produk' => 'kecap', 'jumlah' => '46', 'tanggal_produksi' => '2012-03-14', 'merk_id' => '3'],
            ['nama_produk' => 'susu', 'jumlah' => '86', 'tanggal_produksi' => '2018-01-18', 'merk_id' => '2'],
            ['nama_produk' => 'saos', 'jumlah' => '68', 'tanggal_produksi' => '2011-04-17', 'merk_id' => '3'],
            ['nama_produk' => 'bumbu racik', 'jumlah' => '213', 'tanggal_produksi' => '2010-06-28', 'merk_id' => '2'],
        ];

//masukkan data ke database
        DB::table('produks')->insert($produks);

    }
}
