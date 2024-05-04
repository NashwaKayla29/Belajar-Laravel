<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'id_barang2s', 'id_pembelis', 'jumlah', 'tanggal'];
    public $timestamps = true;

    public function barang2()
    {
        return $this->BelongsTo(Barang2::class, 'id_barang2s');
    }
    public function pembelis()
    {
        return $this->belongsTo(Pembelis::class, 'id_pembelis');
    }
}
