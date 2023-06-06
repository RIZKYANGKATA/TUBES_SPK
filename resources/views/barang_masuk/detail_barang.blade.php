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
              <h1>Detail Barang</h1>
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
                <div class="card-body"><table class="table table-bordered table-striped">
                  

                    <thead>
                      <tr>
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
                        <th>Qty</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if($bm->count() > 0)
                          <tr>
                            <td>{{$bm->kode_transaksi}}</td>
                            <td>{{$bm->nama_barang}}</td>
                            <td>{{$bm->tanggal}}</td>
                            <td>{{$bm->kode_pengguna}}</td>
                            <td>{{$bm->kode_barang}}</td>
                            <td>{{$bm->satuan}}</td>
                            <td>{{$bm->kategori_barang}}</td>
                            <td><b>Rp.</b>{{$bm->harga_beli}}</td>
                            <td>{{$bm->merk}}</td>
                            <td>{{$bm->warna}}</td>
                            <td>{{$bm->ket_barang}}</td>
                            <td>{{$bm->stok_masuk}}</td>
                            <td style="display: flex">
                              </div>
                          </form>
                          </td>
                        </tr>
                    @else
                        <tr><td colspan="11" class="text-center">Data Tidak Ada</td></tr>
                    @endif
                  </tbody>
                </table>
                <a href="{{url('barang_masuk')}}" class="btn btn-sm btn-primary my-2">Kembali</a>
                <div class="d-flex justify-content-center mt-2">
                  {{-- {{ $bm->links() }} --}}
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