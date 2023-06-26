@extends('layout.template')

@section('title')
    Barang Keluar
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Barang Keluar</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Barang Keluar</li>
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
                                {!! (isset($bm))? method_field('PUT') : '' !!}

                                <div class="form-group">
                                    <label>Kode Transaksi</label>
                                    <input required class="form-control @error('kode_transaksi') is-invalid @enderror"  name="kode_transaksi" type="text" />
                                    @error('kode_transaksi')
                                        <span class="error invalid-feedback">{{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <select id="nama_barang" name="nama_barang">
                                      <option value="" data-kode="" data-satuan="">Pilih Data</option>
                                        @foreach ($brgMasuk as $b)
                                        <option value="{{ $b->nama_barang }}" data-kode="{{ $b->kode_barang }}" data-satuan="{{ $b->satuan }}" data-kategori="{{ $b->kategori_barang }}" data-merk="{{ $b->merk }}" data-warna="{{ $b->warna }}" data-keterangan="{{ $b->ket_barang }}">{{ $b->nama_barang }}</option>
                                        @endforeach
                                    </select>
                                    @error('nama_barang')
                                        <span class="error invalid-feedback">{{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input required class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" type="date" />
                                    @error('tanggal')
                                        <span class="error invalid-feedback">{{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Kode Barang</label>
                                    <input required class="form-control @error('kode_barang') is-invalid @enderror"name="kode_barang" id="kode_barang" type="text"/>
                                    @error('kode_barang')
                                        <span class="error invalid-feedback">{{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Satuan</label>
                                    <input required class="form-control @error('satuan') is-invalid @enderror"name="satuan" id="satuan" type="text"/>
                                    @error('satuan')
                                        <span class="error invalid-feedback">{{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <input required class="form-control @error('kategori_barang') is-invalid @enderror"name="kategori_barang" id="kategori_barang" type="text"/>
                                    @error('kategori_barang')
                                        <span class="error invalid-feedback">{{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Harga Jual</label>
                                    <input required class="form-control @error('harga_beli') is-invalid @enderror"name="harga_beli" id="harga_jual" type="text"/>
                                    @error('harga_beli')
                                        <span class="error invalid-feedback">{{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Merk</label>
                                    <input required class="form-control @error('merk') is-invalid @enderror" name="merk" id="merk" type="text"/>
                                    @error('merk')
                                        <span class="error invalid-feedback">{{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Warna</label>
                                    <input required class="form-control @error('warna') is-invalid @enderror"name="warna" id="warna" type="text"/>
                                    @error('warna')
                                        <span class="error invalid-feedback">{{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Keterangan Barang</label>
                                    <input required class="form-control @error('warna') is-invalid @enderror"name="ket_barang" id="ket_barang" type="text"/>
                                    @error('ket_barang')
                                        <span class="error invalid-feedback">{{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Qty</label>
                                    <input required class="form-control @error('stok_keluar') is-invalid @enderror" name="stok_keluar" id="stok_keluar" type="text"/>
                                    @error('stok_keluar')
                                        <span class="error invalid-feedback">{{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <a href="{{url('barang_masuk')}}" class="btn btn-secondary"><i class="fas fa-arrow-left pr-1"></i>Back</a>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

    <script>
      // Mengambil data barang saat mengubah pilihan nama_barang
      document.getElementById('nama_barang').addEventListener('change', function() {
          //var selectedOption = this.options[this.selectedIndex];

          var dropdown = document.getElementById('nama_barang');
          var selectedOption = dropdown.options[dropdown.selectedIndex];
          
          document.getElementById('kode_barang').value = selectedOption.dataset.kode;
          document.getElementById('satuan').value = selectedOption.dataset.satuan;
          document.getElementById('kategori_barang').value = selectedOption.dataset.kategori;
          document.getElementById('merk').value = selectedOption.dataset.merk;
          document.getElementById('warna').value = selectedOption.dataset.warna;
          document.getElementById('ket_barang').value = selectedOption.dataset.keterangan;

      });
  </script>

  <script>
    
  </script>
@endsection
