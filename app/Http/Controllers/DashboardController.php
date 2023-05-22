<?php

namespace App\Http\Controllers;

use App\Models\barang_keluar;
use App\Models\barang_masuk;
use App\Models\stok;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $countBarangMasuk = barang_masuk::count();
        $countBarangKeluar = barang_keluar::count();
        $countStok = stok::count();
        return view('dashboard')
            ->with('countBarangMasuk', $countBarangMasuk)
            ->with('countBarangKeluar', $countBarangKeluar)
            ->with('countStok', $countStok);
    }
}
