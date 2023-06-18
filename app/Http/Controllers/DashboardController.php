<?php

namespace App\Http\Controllers;

use App\Models\barang_keluar;
use App\Models\barang_masuk;
use App\Models\laporan;
use App\Models\stok;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $countBarangMasuk = barang_masuk::count();
        $countBarangKeluar = barang_keluar::count();
        $countStok = stok::count();
        $countMasterData = User::count();
        return view('dashboard')
            ->with('countBarangMasuk', $countBarangMasuk)
            ->with('countBarangKeluar', $countBarangKeluar)
            ->with('countStok', $countStok)
            ->with('countMasterData', $countMasterData);
    }

    public function getUser($id) {
        $usr = User::find($id);
        $countBarangMasuk = barang_masuk::count();
        $countBarangKeluar = barang_keluar::count();
        $countStok = stok::count();
        $countMasterData = User::count();
        return view ('user.edit_user')
                    ->with('usr', $usr)
                    ->with('url_form', url('/edit_user/'. $id))
                    ->with('countBarangMasuk', $countBarangMasuk)
                    ->with('countBarangKeluar', $countBarangKeluar)
                    ->with('countStok', $countStok)
                    ->with('countMasterData', $countMasterData);
    }

    public function updateUser(Request $request, $id)
{
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'max:255'],
        'password' => ['nullable', 'string', 'min:4'],
    ]);

    $userData = $request->except(['_token', '_method']);

    if (empty($userData['password'])) {
        unset($userData['password']);
    } else {
        $userData['password'] = Hash::make($userData['password']);
    }

    $data = User::where('id', $id)->update($userData);

    return redirect()->back()->with('success', 'Data pengguna berhasil diperbarui');
}

public function showUser($id) {
    $usr = User::find($id);
    $countBarangMasuk = barang_masuk::count();
    $countBarangKeluar = barang_keluar::count();
    $countStok = stok::count();
    $countMasterData = User::count();
    return view ('user.detail_user')
                ->with('usr', $usr)
                ->with('countBarangMasuk', $countBarangMasuk)
                ->with('countBarangKeluar', $countBarangKeluar)
                ->with('countStok', $countStok)
                ->with('countMasterData', $countMasterData);

}

}
