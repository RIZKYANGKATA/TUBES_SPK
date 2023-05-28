<!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>CV. Omega Art</title>
          <link rel="icon" type="image/x-icon" href="{{ asset('assets/image/salju.png') }}">

          <!-- Google Font: Source Sans Pro -->
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
          <!-- Font Awesome -->
          <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
          <!-- icheck bootstrap -->
          <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
          <!-- Theme style -->
          <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
        </head>
        <body class="hold-transition register-page" style="background-image: url(assets/image/salju6.png);background-position: center;background-size: cover;background-repeat: no-repeat;">
        <div class="register-box">
          <div class="register-logo">

          </div>

          <div class="card">
            <div class="card-body register-card-body">
              <b><p class="login-box-msg" style="color:blue">Register</p></b>
              <form method="POST" action="{{ url('/master_data/create') }}">
                @csrf
                <div class="input-group mb-3">
                  <input class="form-control @error('username') is-invalid @enderror" value="{{ isset($usr)? $usr->username : old('username') }}" name="username" type="text" placeholder="Username">
                  @error('username')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror

                </div>
                <div class="input-group mb-3">
                  <input class="form-control @error('name') is-invalid @enderror" value="{{ isset($usr)? $usr->name : old('name') }}" name="name" type="text" placeholder="Full name">
                  @error('name')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror

                </div>
                <div class="input-group mb-3">
                  <input class="form-control @error('email') is-invalid @enderror" value="{{ isset($usr)? $usr->name : old('email') }}" name="email" type="email" placeholder="Email">
                  @error('email')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror

                </div>
                <div class="input-group mb-3">
                    <input class="form-control @error('level') is-invalid @enderror" value="{{ isset($usr)? $usr->name : old('level') }}" name="level" type="level" placeholder="Level">
                    @error('level')
                      <span class="error invalid-feedback">{{ $message }} </span>
                    @enderror

                  </div>
                <div class="input-group mb-3">
                  <input class="form-control @error('password') is-invalid @enderror" value="{{ isset($usr)? $usr->password : old('password') }}" name="password" type="password" placeholder="Password">
                  @error('password')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror

                </div>
                <div class="form-group">
                  <button class="btn btn-primary btn-block">Tambah User</button>
                </div>
                {{-- <a href="{{ }}" class="text-center">Kembali</a> --}}
              </form>
                  <!-- /.col -->
                </div>

            </div>
            <!-- /.form-box -->
          </div><!-- /.card -->
        </div>
        <!-- /.register-box -->

        <!-- jQuery -->
        <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
        </body>
        </html>
