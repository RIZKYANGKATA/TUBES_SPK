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
                        <th>Qty</th>
                        <th>Action</th>
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
                            <td>{{$m->stok_masuk}}</td>
                            <td style="display: flex">

                              <form method="POST" action="{{ url('/barang_masuk/'.$m->id) }}">
                                <a href="{{ url('/barang_masuk/'. $m->id) }}" class="btn btn-sm btn-secondary mr-2">Detail</a>
                                <a href="{{ url('/barang_masuk/'. $m->id.'/edit')}}" class="btn btn-sm btn-warning mr-2">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapusModal" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                            
                                <!-- Modal -->
                                {{-- <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="hapusModalLabel">Konfirmasi Hapus</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                              Apakah Anda yakin ingin menghapus data ini?
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                              <button type="submit" class="btn btn-danger">Hapus</button>
                                          </div>
                                      </div>
                                  </div> --}}
                              </div>
                          </form>
                          </td>
                        </tr>
                      @endforeach
                    @else
                        <tr><td colspan="6" class="text-center">Data Tidak Ada</td></tr>
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