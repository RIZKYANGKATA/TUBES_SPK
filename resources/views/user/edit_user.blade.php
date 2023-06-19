@extends('layout.template')
@section('title')
    Edit User
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
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
                        <div class="card-body">
                            <form method="POST" action="{{ $url_form }}">
                                @csrf
                                {!! (isset($usr))? method_field('PUT') : '' !!}
                                <div class="form-group">
                                    <label for="name"><b>Nama :</b></label>
                                    <input class="form-control @error('name') is-invalid @enderror" value="{{ isset($usr)? $usr->name : old('name') }}" name="name" type="text" placeholder="Full name">
                                    @error('name')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email"><b>Email :</b></label>
                                    <input class="form-control @error('email') is-invalid @enderror" value="{{ isset($usr)? $usr->email : old('email') }}" name="email" type="email" placeholder="Email">
                                    @error('email')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password"><b>Password :</b></label>
                                    <input class="form-control @error('password') is-invalid @enderror" name="password" type="password" placeholder="Kosongkan jika tidak ingin merubah password">
                                    @error('password')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <a href="{{ url('dashboard') }}" class="btn btn-secondary"><i class="fas fa-arrow-left pr-1"></i>Back</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
