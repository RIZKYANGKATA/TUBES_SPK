<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use App\Models\stok;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(laporan $laporan)
    {
        //
    }


    public function laporan($kode_barang)
    {
        $laporan = laporan::where('kode_barang',$kode_barang)->first();
        $stok = stok::where('kode_barang',$kode_barang)->get();
        return view('stok.laporan')
                ->with('kode_barang', $kode_barang)
                ->with('kode_barang', $kode_barang);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(laporan $laporan)
    {
        //
    }

    public function cetak_pdf($kode_barang){
        $daftar_barang = stok::all();
        // return view('stok.laporan_pdf')->with('daftar_barang', $daftar_barang);
        // $stok = stok::where('kode_barang',$kode_barang)->get();
        $pdf = PDF::loadview('stok.laporan_pdf', ['daftar_barang'=>$daftar_barang]);
        return $pdf->stream();
    }
}
