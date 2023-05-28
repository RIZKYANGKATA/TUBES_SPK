<aside class="main-sidebar sidebar-dark-primary bg-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8') }}">
      <span class="brand-text font-weight-light">PROYEK 1</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar bg-primary">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('assets/image/burungg.jpg') }}" class="img-circle elevation-2" alt="User Image') }}">
          </div>
          @if(auth()->user()->level == 1)
          <div class="info">
            <a href="#" class="d-block">ADMIN</a>
          </div>
          @endif
          @if(auth()->user()->level == 2)
          <div class="info">
            <a href="#" class="d-block">STAFF</a>
          </div>
          @endif
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{ url('/dashboard') }}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item menu-close">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-dollar-sign"></i>
                <p>
                  Transaksi
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('/barang_masuk')}}" class="nav-link">
                    <p>Barang Masuk</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('/barang_keluar')}}" class="nav-link">
                    <p>Barang Keluar</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="{{ url('/stok') }}" class="nav-link">
                <i class="nav-icon fas fa-warehouse"></i>
                <p>Stok Barang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/laporan/0/stok/cetak_pdf') }}" class="nav-link">
                <i class="nav-icon fas fa-book-dead"></i>
                <p>Cetak Laporan</p>
              </a>
            </li>
            @if(auth()->user()->level == 1)
            <li class="nav-item">
              <a href="{{ url('/master_data') }}" class="nav-link">
                <i class="nav-icon fas fa-server"></i>
                <i class="nav-item menu-open"></i>
                <p>Master Data</p>
              </a>
            </li>
            @endif
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    <!-- /.sidebar -->
  </aside>
