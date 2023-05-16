<?php

namespace App\Http\Controllers;

use App\Models\barang_keluar;
use App\Models\barang_masuk;
use App\Models\stok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangMasukController extends Controller
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
            $bm = barang_masuk::where('kode_transaksi', 'LIKE', '%'.$query.'%')
                ->orWhere('nama_barang', 'LIKE', '%'.$query.'%')
                ->paginate(5);
        } else {
            $bm = barang_masuk::paginate(3);
        }
        return view('barang_masuk.barang_masuk', ['bm' => $bm]);
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

        $data2 = DB::table('stok')
            ->where('kode_barang', $request->input('kode_barang'))
            ->get()
        ;
        foreach($data2 as $d){
            $sm = $d->stok_masuk;
            $sk = $d->stok_keluar;
        }

        if($data2->count()==1){
            $inputStok = Stok::where('kode_barang', '=', $request->input('kode_barang'))
            ->update([
                'stok_masuk' => $sm + $request->input('stok_masuk'),
                'stok_akhir' => ($sm + $request->input('stok_masuk')) - $sk
            ]);
            ;
        }else{
            $inputStok = stok::create($request->except(['_token']));
            //dd($inputStok);
        }

        return redirect('barang_masuk')
            ->with('success', 'Barang Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang_masuk  $barang_masuk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bm = barang_masuk::find($id);
        return view('barang_masuk.detail_barang')
            ->with('bm', $bm)
            ->with('url_form', url('/barang_masuk/'. $id));
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
        // barang_keluar::create([
        //     'kode_transaksi' => $barang['kode_transaksi'],
        //     'tanggal' => $barang['tanggal'],
        //     'kode_pengguna' => $barang['kode_pengguna'],
        //     'nama_barang' => $barang['nama_barang']
        // ]);

        $data2 = DB::table('stok')
            ->where('kode_barang', $barang->kode_barang)
            ->get()
        ;
        foreach($data2 as $d){
            $stok_keluar = $d->stok_keluar;
            $stok_masuk = $d->stok_masuk;
        }
        if($data2->count()==1){
            $inputStok = Stok::where('kode_barang', '=', $barang->kode_barang)
            ->update([
                'stok_keluar' => $stok_keluar + $barang->stok_masuk,
                'stok_akhir' => $stok_masuk - ($stok_keluar + $barang->stok_masuk)
            ]);
        }else{
            $inputStok = stok::create($request->except(['_token']));
            //dd($inputStok);
        }


        barang_masuk::where('id', '=', $id)->delete();
        return redirect('barang_masuk')
            ->with('success', 'Barang Berhasil Dihapus');
    }
}
