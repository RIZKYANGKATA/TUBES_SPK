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
              <h1>Daftar Barang Masuk</h1>
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
              <div class="card card-pink card-outline">
                <div class="card-body">

                  <a href="{{url('barang_masuk/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>

                  <form action="{{ url('barang_masuk') }}" method="GET" class="form-inline my-2 my-lg-0">
                    
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
                        <th>Kode Barang</th>
                        <th>Satuan</th>
                        <th>Kategori Barang</th>
                        <th>Harga Beli</th>
                        <th>Merk</th>
                        <th>Warna</th>
                        <th>Keterangan Barang</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if($bm->count() > 0)
                        @foreach($bm as $b => $m)
                          <tr>
                            <td>{{++$b}}</td>
                            <td>{{$m->kode_transaksi}}</td>
                            <td>{{$m->nama_barang}}</td>
                            <td>{{$m->tanggal}}</td>
                            <td>{{$m->kode_pengguna}}</td>
                            <td>{{$m->kode_barang}}</td>
                            <td>{{$m->satuan}}</td>
                            <td>{{$m->kategori_barang}}</td>
                            <td>{{$m->harga_beli}}</td>
                            <td>{{$m->merk}}</td>
                            <td>{{$m->warna}}</td>
                            <td>{{$m->ket_barang}}</td>
                            <td style="display: flex">

                              
                              </div>
                          </form>
                          </td>
                        </tr>
                      @endforeach
                    @else
                        <tr><td colspan="12" class="text-center">Data Tidak Ada</td></tr>
                    @endif
                  </tbody>
                </table>
                <div class="d-flex justify-content-center mt-2">
                  {{ $bm->links() }}
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