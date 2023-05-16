<?php

namespace App\Http\Controllers;

use App\Models\barang_keluar;
use App\Models\barang_masuk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $countBarangMasuk = barang_masuk::count();
        $countBarangKeluar = barang_keluar::count();
        return view('dashboard')
            ->with('countBarangMasuk', $countBarangMasuk)
            ->with('countBarangKeluar', $countBarangKeluar);
    }
}
