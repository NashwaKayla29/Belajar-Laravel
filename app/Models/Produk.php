<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_produk', 'jumlah', 'tanggal_produksi', 'merk_id'];
    public $timestamps = true;

    public function merk()
    {
        return $this->belongsTo(Merk::class,'merk_id');
    }
}
