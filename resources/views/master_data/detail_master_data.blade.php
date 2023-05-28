@extends('layout.template')

@section('title')
    Master User
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
                        <li class="breadcrumb-item active">Master User</li>
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
                                <p><b>Username:</b> {{ $user->username }}</p>
                                <p><b>Name:</b> {{ $user->name }}</p>
                                <p><b>Email:</b> {{ $user->email }}</p>
                                <p><b>Level:</b> {{ $user->level == '1' ? 'Admin' : 'Staff' }}</p>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <a href="{{ url('master_data') }}" class="btn btn-secondary"><i class="fas fa-arrow-left pr-1"></i>Back</a>
@endsection
