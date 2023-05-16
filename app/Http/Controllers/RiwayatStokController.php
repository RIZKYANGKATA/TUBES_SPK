<?php

namespace App\Http\Controllers;

use App\Models\riwayat_stok;
use Illuminate\Http\Request;

class RiwayatStokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riwayat_stok = riwayat_stok::all();
        return view('stok.riwayat_stok')
            ->with('riwayat_stok', $riwayat_stok);
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
     * @param  \App\Models\riwayat_stok  $riwayat_stok
     * @return \Illuminate\Http\Response
     */
    public function show(riwayat_stok $riwayat_stok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\riwayat_stok  $riwayat_stok
     * @return \Illuminate\Http\Response
     */
    public function edit(riwayat_stok $riwayat_stok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\riwayat_stok  $riwayat_stok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, riwayat_stok $riwayat_stok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\riwayat_stok  $riwayat_stok
     * @return \Illuminate\Http\Response
     */
    public function destroy(riwayat_stok $riwayat_stok)
    {
        //
    }
}
