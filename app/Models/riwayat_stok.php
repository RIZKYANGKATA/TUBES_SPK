<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat_stok extends Model
{
    use HasFactory;
    protected $table = 'riwayat_stok';
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'kategori_barang',
        'tanggal',
        'stok_masuk',
        'stok_keluar'
    ];
}
