@extends('layout.template')

@section('title')
  Stok
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Daftar Stok Barang</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Stok</li>
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
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Kategori Barang</th>
                        <th>Stok Masuk</th>
                        <th>Stok Keluar</th>
                        <th>Stok Akhir</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if($stok->count() > 0)
                        @foreach($stok as $st => $s)
                          <tr>
                            <td>{{++$s}}</td>
                            <td>{{$s->kode_barang}}</td>
                            <td>{{$s->nama_barang}}</td>
                            <td>{{$s->kategori_barang}}</td>
                            <td>{{$s->stok_masuk}}</td>
                            <td>{{$s->stok_keluar}}</td>
                            <td>{{$s->stok_akhir}}</td>
                            <td style="display: flex">
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
                            </td>
                          </tr>
                      @endforeach
                    @else
                          <tr><td colspan="7" class="text-center">Data Tidak Ada</td></tr>
                    @endif
                  </tbody>
                </table>
                {{-- <div class="d-flex justify-content-center mt-2">
                  {{ $bm->links() }}
                </div> --}}
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection