<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;
    protected $table = 'laporan';
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'stok_masuk',
        'stok_keluar',
        'stok_akhir'
    ];
}
