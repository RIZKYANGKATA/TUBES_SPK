@extends('layout.template')

@section('title')
    Detail User
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Detail User</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Detail User</li>
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
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                         src="{{ asset('assets/image/burungg.jpg') }}"
                         alt="User profile picture">
                  </div>
  
                  {{-- <h3 class="profile-username text-center">{{$name}}</h3> --}}
  
                  <p class="text-muted text-center">PROFIL ANDA</p>
  
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Username : </b>{{$usr->username}}
                    </li>
                    <li class="list-group-item">
                      <b>Name : </b>{{$usr->name}}
                    </li>
                    <li class="list-group-item">
                      <b>Email : </b>{{$usr->email}}
                    </li>
                    <li class="list-group-item">
                      <b>Level : </b>{{$usr->level == '1' ? 'Admin' : 'Staff'}}
                    </li>
                  </ul>
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