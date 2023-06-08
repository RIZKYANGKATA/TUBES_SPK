<?php

namespace App\Http\Controllers;

use App\Models\stok;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stok = stok::all();
        //dd($stok);
        return view('stok.stok')
            ->with('stok', $stok);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function show(stok $stok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function edit(stok $stok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stok $stok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function destroy(stok $stok)
    {
        //
    }

    public function getStokBarang()
    {
        $data = stok::selectRaw('kode_barang, nama_barang, kategori_barang, stok_masuk, stok_keluar, stok_akhir, id');

        return DataTables::of($data)
                    ->addIndexColumn()
                    ->make(true);
    }
}
