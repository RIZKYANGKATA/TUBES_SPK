@extends('layout.template')

@section('title')
  Barang Keluar
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Daftar Barang Keluar</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Barang Keluar</li>
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
              <div class="card card-pink card-outline">
                <div class="card-body">

                  <form action="{{ url('barang_keluar') }}" method="GET" class="form-inline my-2 my-lg-0">
                    
                    <input class="form-control mr-sm-2 my-2" type="search" name="query" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                  </form>

                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kode Transaksi</th>
                        <th>Nama Barang</th>
                        <th>Tanggal</th>
                        <th>Kode Pengguna</th>
                        <th>Qty</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if($bk->count() > 0)
                        @foreach($bk as $b => $k)
                          <tr>
                            <td>{{++$b}}</td>
                            <td>{{$k->kode_transaksi}}</td>
                            <td>{{$k->nama_barang}}</td>
                            <td>{{$k->tanggal}}</td>
                            <td>{{$k->kode_pengguna}}</td>
                            <td>{{$k->stok_keluar}}</td>
                            <td style="display: flex">
                            </td>
                          </tr>
                        @endforeach
                      @else
                          <tr><td colspan="6" class="text-center">Data Tidak Ada</td></tr>
                      @endif
                    </tbody>
                  </table>
                  <div class="d-flex justify-content-center mt-2">
                    {{ $bk->links() }}
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