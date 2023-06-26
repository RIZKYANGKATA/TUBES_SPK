<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang_keluar extends Model
{
    use HasFactory;
    protected $table = 'barang_keluar';
    protected $fillable = [
        'kode_transaksi',
        'nama_barang',
        'tanggal',
        'kode_pengguna',
        'stok_keluar'
    ];
}
