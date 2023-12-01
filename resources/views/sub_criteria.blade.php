@extends('layout.template')

@section('title')
  Sub Kriteria
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Sub Kriteria</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">TUBES SPK</li>
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

                  <table class="table table-bordered table-striped">
                   <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Criteria</th>
                        <th>Jenis Criteria</th>
                        <th>Bobot Criteria</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                    
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
  
</script>
@endpush
