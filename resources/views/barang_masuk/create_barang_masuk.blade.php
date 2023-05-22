@extends('layout.template')

@section('title')
    Barang Masuk
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Barang Masuk</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Barang Masuk</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col">
  
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body">
                  <form method="POST" action="{{ $url_form }}">
                    @csrf
                    {!! (isset($bm))? method_field('PUT') : '' !!}


                    <div class="form-group">
                      <label>Kode Transaksi</label>
                      <input required class="form-control @error('kode_transaksi') is-invalid @enderror" value="{{ isset($bm)? $bm->kode_transaksi : old('kode_transaksi') }}" name="kode_transaksi" type="text" />
                      @error('kode_transaksi')
                        <span class="error invalid-feedback">{{ $message }} </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Nama Barang</label>
                      <input required class="form-control @error('nama_barang') is-invalid @enderror" value="{{ isset($bm)? $bm->nama_barang : old('nama_barang') }}" name="nama_barang" type="text" />
                      @error('nama_barang')
                        <span class="error invalid-feedback">{{ $message }} </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Tanggal</label>
                      <input required class="form-control @error('tanggal') is-invalid @enderror" value="{{ isset($bm)? $bm->tanggal : old('tanggal') }}" name="tanggal" type="date" />
                      @error('tanggal')
                        <span class="error invalid-feedback">{{ $message }} </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Kode Pengguna</label>
                      <input required class="form-control @error('kode_pengguna') is-invalid @enderror" value="{{ isset($bm)? $bm->kode_pengguna : old('kode_pengguna') }}" name="kode_pengguna" type="text"/>
                      @error('kode_pengguna')
                        <span class="error invalid-feedback">{{ $message }} </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Kode Barang</label>
                      <input required class="form-control @error('kode_barang') is-invalid @enderror" value="{{ isset($bm)? $bm->kode_barang : old('kode_barang') }}" name="kode_barang" type="text"/>
                      @error('kode_barang')
                        <span class="error invalid-feedback">{{ $message }} </span>
                      @enderror
                    </div><div class="form-group">
                      <label>Satuan</label>
                      <input required class="form-control @error('satuan') is-invalid @enderror" value="{{ isset($bm)? $bm->satuan : old('satuan') }}" name="satuan" type="text"/>
                      @error('satuan')
                        <span class="error invalid-feedback">{{ $message }} </span>
                      @enderror
                    </div><div class="form-group">
                      <label>Kategori</label>
                      <input required class="form-control @error('kategori_barang') is-invalid @enderror" value="{{ isset($bm)? $bm->kategori_barang : old('kategori_barang') }}" name="kategori_barang" type="text"/>
                      @error('kategori_barang')
                        <span class="error invalid-feedback">{{ $message }} </span>
                      @enderror
                    </div><div class="form-group">
                      <label>Harga Beli</label>
                      <input required class="form-control @error('harga_beli') is-invalid @enderror" value="{{ isset($bm)? $bm->harga_beli : old('harga_beli') }}" name="harga_beli" type="text"/>
                      @error('harga_beli')
                        <span class="error invalid-feedback">{{ $message }} </span>
                      @enderror
                    </div><div class="form-group">
                      <label>Merk</label>
                      <input required class="form-control @error('merk') is-invalid @enderror" value="{{ isset($bm)? $bm->merk : old('merk') }}" name="merk" type="text"/>
                      @error('merk')
                        <span class="error invalid-feedback">{{ $message }} </span>
                      @enderror
                    </div><div class="form-group">
                      <label>Warna</label>
                      <input required class="form-control @error('warna') is-invalid @enderror" value="{{ isset($bm)? $bm->warna : old('warna') }}" name="warna" type="text"/>
                      @error('warna')
                        <span class="error invalid-feedback">{{ $message }} </span>
                      @enderror
                    </div><div class="form-group">
                      <label>Keterangan Barang</label>
                      <input required class="form-control @error('ket_barang') is-invalid @enderror" value="{{ isset($bm)? $bm->ket_barang : old('ket_barang') }}" name="ket_barang" type="text"/>
                      @error('ket_barang')
                        <span class="error invalid-feedback">{{ $message }} </span>
                      @enderror
                    </div>
                  <div class="form-group">
                    <label>Qty</label>
                    <input required class="form-control @error('stok_masuk') is-invalid @enderror" value="{{ isset($bm)? $bm->stok_masuk : old('stok_masuk') }}" name="stok_masuk" type="text"/>
                    @error('stok_masuk')
                      <span class="error invalid-feedback">{{ $message }} </span>
                    @enderror
                  </div>
        
        
        
                    <div class="form-group">
                      <a href="{{url('barang_masuk')}}" class="btn btn-secondary"><i class="fas fa-arrow-left pr-1"></i>Back</a> 
                      <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                      
                    </div>
                  </form>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection