<!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>AdminLTE 3 | Registration Page</title>
        
          <!-- Google Font: Source Sans Pro -->
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
          <!-- Font Awesome -->
          <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
          <!-- icheck bootstrap -->
          <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
          <!-- Theme style -->
          <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
        </head>
        <body class="hold-transition register-page">
        <div class="register-box">
          <div class="register-logo">
            <a href="../../index2.html"><b>Register</b></a>
          </div>
        
          <div class="card">
            <div class="card-body register-card-body">
              <p class="login-box-msg">Register a new membership</p>
              <form method="POST" action="register">
                @csrf
                {!! (isset($usr))? method_field('PUT') : ''!!}
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
                  <button class="btn btn-primary btn-block">Register</button>
                </div>
                <a href="{{ url('/login') }}" class="text-center">I already have a membership</a>
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
      