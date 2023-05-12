<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang_masuk extends Model
{
    use HasFactory;
    protected $table = 'barang_masuk';
    protected $fillable = [
        'kode_transaksi',
        'nama_barang',
        'tanggal',
        'kode_pengguna',
        'kode_barang',
        'satuan',
        'kategori_barang',
        'harga_beli',
        'merk',
        'warna',
        'ket_barang',
    ];
}
