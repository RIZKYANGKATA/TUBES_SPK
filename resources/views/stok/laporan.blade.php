@extends('layout.template')

@section('content')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Daftar Barang Masuk & Barang Keluar</h1>

      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Laporan</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title"><b>Detail Laporan</b></h3> <br>
        <br>
        <a href="{{ url('/laporan/'. $laporan->kode_barang.'/laporan/cetak_pdf')}}" class="btn btn-sm btn-warning mr-2">Cetak PDF</a>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      {{-- <ul class="list-group list-group-flush">
        <li class="list-group-item"><b>NIM: </b> {{ $mahasiswa->nim }}</li>
        <li class="list-group-item"><b>Nama: </b> {{ $mahasiswa->nama }}</li>
        <li class="list-group-item"><b>Kelas: </b> {{ $mahasiswa->kelas->nama_kelas }}</li>
    </ul>  --}}
      <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Stok Masuk</th>
                <th>Stok Keluar</th>
                <th>Stok Akhir</th>
              </tr>
        </thead>
        <tbody>
            @foreach ($stok as $s => $t)
            <tr>
              <td>{{$s+1}}</td>
              <td>{{$t->stok->kode_barang}}</td>
              <td>{{$t->stok->nama_barang}}</td>
              <td>{{$t->stok->stok_masuk}}</td>
              <td>{{$t->stok->stok_keluar}}</td>
              <td>{{$t->stok->stok_akhir}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <a href="{{url('laporan')}}" class="btn btn-default"><i class="fas fa-arrow-left pr-1"></i>Back</a>
  </div>
    </div>
    
  </div>
@endsection