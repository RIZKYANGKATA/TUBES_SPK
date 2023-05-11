<?php

namespace App\Http\Controllers;

use App\Models\barang_keluar;
use App\Models\barang_masuk;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bm = barang_masuk::paginate(5);
        return view('barang_masuk.barang_masuk')
            ->with('bm', $bm);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang_masuk.create_barang_masuk')
            ->with('url_form', url('/barang_masuk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = barang_masuk::create($request->except(['_token']));

        return redirect('barang_masuk')
            ->with('success', 'Barang Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang_masuk  $barang_masuk
     * @return \Illuminate\Http\Response
     */
    public function show(barang_masuk $barang_masuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang_masuk  $barang_masuk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bm = barang_masuk::find($id);
        return view('barang_masuk.create_barang_masuk')
            ->with('bm', $bm)
            ->with('url_form', url('/barang_masuk/'. $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barang_masuk  $barang_masuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_transaksi' => 'required|string|max:20',
            'tanggal' => 'required|date',
            'kode_pengguna' => 'required|string|max:100'
        ]);
        $data = barang_masuk::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('barang_masuk')
            ->with('success', 'Barang Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barang_masuk  $barang_masuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $barang = barang_masuk::find($id);
        // dd($barang['kode_transaksi']);
        barang_keluar::create([
            'kode_transaksi' => $barang['kode_transaksi'],
            'tanggal' => $barang['tanggal'],
            'kode_pengguna' => $barang['kode_pengguna'],
            'nama_barang' => $barang['nama_barang']
        ]);
        barang_masuk::where('id', '=', $id)->delete();
        return redirect('barang_masuk')
            ->with('success', 'Barang Berhasil Dihapus');
    }
}
