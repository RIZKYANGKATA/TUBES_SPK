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
                      <input class="form-control @error('kode_transaksi') is-invalid @enderror" value="{{ isset($bm)? $bm->kode_transaksi : old('kode_transaksi') }}" name="kode_transaksi" type="text" />
                      @error('kode_transaksi')
                        <span class="error invalid-feedback">{{ $message }} </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Tanggal</label>
                      <input class="form-control @error('tanggal') is-invalid @enderror" value="{{ isset($bm)? $bm->tanggal : old('tanggal') }}" name="tanggal" type="text" />
                      @error('tanggal')
                        <span class="error invalid-feedback">{{ $message }} </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Kode Pengguna</label>
                      <input class="form-control @error('kode_pengguna') is-invalid @enderror" value="{{ isset($bm)? $bm->kode_pengguna : old('kode_pengguna') }}" name="kode_pengguna" type="text"/>
                      @error('kode_pengguna')
                        <span class="error invalid-feedback">{{ $message }} </span>
                      @enderror
                    </div>
        
        
        
                    <div class="form-group">
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