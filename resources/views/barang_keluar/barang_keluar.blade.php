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
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
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

                  <table class="table table-bordered table-striped" id="table_barangKeluar">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kode Transaksi</th>
                        <th>Nama Barang</th>
                        <th>Tanggal</th>
                        <th>Kode Pengguna</th>
                      </tr>
                    </thead>
                    <tbody>
                      {{-- @if($bk->count() > 0)
                        @foreach($bk as $b => $k)
                          <tr>
                            <td>{{++$b}}</td>
                            <td>{{$k->kode_transaksi}}</td>
                            <td>{{$k->nama_barang}}</td>
                            <td>{{$k->tanggal}}</td>
                            <td>{{$k->kode_pengguna}}</td>
                            <td style="display: flex">
                            </td>
                          </tr>
                        @endforeach
                      @else
                          <tr><td colspan="6" class="text-center">Data Tidak Ada</td></tr>
                      @endif --}}
                    </tbody>
                  </table>
                  <div class="d-flex justify-content-center mt-2">
                    
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

@push('js_tambahan')
<script>
  let dataTables = null;

  $(document).ready(function() {
    dataTables = $('#table_barangKeluar').DataTable({
            processing:true,
            serverside:true,
            ajax:{
                'url': '{{  url('/get_barang_keluar') }}',
                'dataType': 'json',
                'type': 'GET',
            },
            columns:[
                {data:'nomor',name:'nomor'},
                {data:'kode_transaksi',name:'kode_transaksi'},
                {data:'nama_barang',name:'nama_barang'},
                {data:'tanggal',name:'tanggal'},
                {data:'kode_pengguna',name:'kode_pengguna'},
            ]
        });
  });
</script>
@endpush