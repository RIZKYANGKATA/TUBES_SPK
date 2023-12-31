<aside class="main-sidebar sidebar-dark-primary bg-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/dashboard') }}" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8') }}">
      <span class="brand-text font-weight-light">TUBES SPK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar bg-primary">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      </div>    
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{ url('/kriteria') }}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>Criteria</p>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a href="{{ url('/sub_kriteria')}}" class="nav-link">
                <i class="fas fa-user-cog"></i>
                <p>Sub Criteria</p>
              </a>
            </li> --}}
            <li class="nav-item">
              <a href="{{ url('/alternatif')}}" class="nav-link">
                <i class="nav-icon fas fa-warehouse"></i>
                <p>Alternatif</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/perhitungan')}}" class="nav-link">
                <i class="nav-icon fas fa-calculator"></i>
                <p>Perhitungan</p>
              </a>
            </li>
          
             <li class="nav-item">
              <a href="{{ url('/hasil_akhir')}}" class="nav-link">
                <i class="nav-icon fas fa-book-dead"></i>
                <p>Hasil Akhir</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    <!-- /.sidebar -->
  </aside>
