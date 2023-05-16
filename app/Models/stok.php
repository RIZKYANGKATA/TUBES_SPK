<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stok extends Model
{
    use HasFactory;
    protected $table = 'stok';
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'kategori_barang',
        'stok_masuk',
        'stok_keluar',
        'stok_akhir'
    ];
}
