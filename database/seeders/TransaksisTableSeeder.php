<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = [
            ['id_barang2s' => 1, 'id_pembelis' => 1, 'jumlah' => 12, 'tanggal' => '1997-01-28'],
            ['id_barang2s' => 1, 'id_pembelis' => 1, 'jumlah' => 32, 'tanggal' => '1996-02-24'],
            ['id_barang2s' => 2, 'id_pembelis' => 2, 'jumlah' => 34, 'tanggal' => '1993-03-21'],
            ['id_barang2s' => 2, 'id_pembelis' => 2, 'jumlah' => 42, 'tanggal' => '1998-04-22'],
            ['id_barang2s' => 3, 'id_pembelis' => 3, 'jumlah' => 83, 'tanggal' => '1994-06-25'],
            ['id_barang2s' => 3, 'id_pembelis' => 3, 'jumlah' => 92, 'tanggal' => '1991-07-27'],
        ];
//
        DB::table('transaksis')->insert($transaksis);

    }
}
