<!DOCTYPE html>
<html>
<head>
    <title>CV. Omega Art</title>
</head>
<body>
        <style type="text/css">
        .text-center {
            text-align: center;
        }
        .table {
            width: 100%;
            margin: 0.1rem;
            color: #212529;
            border: 2px solid #262626;
            border-spacing: 0;

        }
        table tr td, table tr th {
            border: 1px solid #262626;
            padding: 0.5rem;
        }
        table tr th{
          background-color: chartreuse;
        }
        </style>
        <center>
            <h3>CV. OMEGA ARTTT</h3>
              <P><h3>LAPORAN DAFTAR BARANG</h3></P>
              <p>-------------------------------------------------------------------------------------------------------------------------------------------------</p>
        </center>
        <div class="card">
            <div class="card-body">
              {{-- <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>NIM: </b> {{ $mahasiswa->nim }}</li>
                <li class="list-group-item"><b>Nama: </b> {{ $mahasiswa->nama }}</li>
                <li class="list-group-item"><b>Kelas: </b> {{ $mahasiswa->kelas->nama_kelas }}</li>
            </ul>  --}}
              <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Kategori Barang</th>
                        <th>Stok Masuk</th>
                        <th>Stok Keluar</th>
                        <th>Stok Akhir</th>
                      </tr>
                </thead>
                <tbody>
                    @foreach ($daftar_barang as $i => $barang)
                    <tr>
                      <td>{{$i+1}}</td>
                      <td>{{$barang->kode_barang}}</td>
                      <td>{{$barang->nama_barang}}</td>
                      <td>{{$barang->kategori_barang}}</td>
                      <td>{{$barang->stok_masuk}}</td>
                      <td>{{$barang->stok_keluar}}</td>
                      <td>{{$barang->stok_akhir}}</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
          </div>
</body>
</html>