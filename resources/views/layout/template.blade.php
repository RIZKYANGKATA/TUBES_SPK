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
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/solid.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/regular.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/regular.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
  @stack('css_tambahan')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include('layout.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layout.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        @yield('content')
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layout.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/dist/js/demo.js') }}"></script>
@stack('js_tambahan')
</body>
</html>