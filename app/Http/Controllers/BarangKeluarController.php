<?php

namespace App\Http\Controllers;

use App\Models\barang_keluar;
use App\Models\stok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->get('query') !== null){
            $query = $request->get('query');
            $bk = barang_keluar::where('kode_transaksi', 'LIKE', '%'.$query.'%')
                ->orWhere('nama_barang', 'LIKE', '%'.$query.'%')
                ->paginate(5);
        } else {
            $bk = barang_keluar::paginate(3);
        }
        return view('barang_keluar.barang_keluar', ['bk' => $bk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang_keluar.create_barang_keluar')
            ->with('url_form', url('/barang_keluar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $data = barang_keluar::create($request->except(['_token']));

        // $data2 = DB::table('stok')
        //     ->where('kode_barang', $request->input('kode_barang'))
        //     ->get()
        // ;
        // foreach($data2 as $d){
        //     $sm = $d->stok_masuk;
        // }

        // if($data2->count()==1){
        //     $inputStok = stok::where('kode_barang', '=', $request->input('kode_barang'))
        //     ->update([
        //         'stok_masuk' => $sm - $request->input('stok_masuk'),
        //     ]);
        //     ;
        // }else{
        //     $inputStok = stok::create($request->except(['_token']));
        //     //dd($inputStok);
        // }

        return redirect('barang_keluar')
            ->with('success', 'Barang Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang_keluar  $barang_keluar
     * @return \Illuminate\Http\Response
     */
    public function show(barang_keluar $barang_keluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang_keluar  $barang_keluar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bk = barang_keluar::find($id);
        return view('barang_keluar.create_barang_keluar')
            ->with('bk', $bk)
            ->with('url_form', url('/barang_keluar/'. $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barang_keluar  $barang_keluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_transaksi' => 'required|string|max:20',
            'tanggal' => 'required|date',
            'kode_pengguna' => 'required|string|max:100'
        ]);
        $data = barang_keluar::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('barang_keluar')
            ->with('success', 'Barang Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barang_keluar  $barang_keluar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        barang_keluar::where('id', '=', $id)->delete();
        return redirect('barang_keluar')
            ->with('success', 'Barang Berhasil Dihapus');
    }
}
