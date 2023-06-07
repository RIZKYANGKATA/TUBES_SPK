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
              <h1>Master Data</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Stok</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
    <a class="btn btn-success mb-3" href="{{ url('/master_data/create') }}">Tambah User</a>

      <!-- Main content -->
      <section class="content d-flex justify-content-center">
        @foreach ($user_list as $user)
        <div class="card mr-4" style="width: 24rem">
            <div class="card-header" style="background-color: palevioletred">
              <b>CV. Omega Art</b>
            </div>
            <div class="card-body" style="background-color: #F8FFDB">
                <p><b>Username:</b> {{ $user->username }}</p>
                <p><b>Level:</b> {{ $user->level == '1' ? 'Admin' : 'Staff' }}</p>
              <a href="{{ url('/detail_master_data/show/'. $user->id) }}" class="btn btn-sm btn-primary">Detail User</a>
              <form class="d-inline-block" action="{{ url('/master_data/delete/' . $user->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus User</button>
              </form>
            </div>
        </div>
        @endforeach
      </section>
      <!-- /.content -->
@endsection
