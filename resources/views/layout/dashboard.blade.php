@extends('layout.template')

@section('content')
<div class="">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card bg-gradient-info">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between align-items-left">
                                <h2 class="card-title ">Selamat Datang di Sistem Pendukung Keputusan</h2>
                                <i class="fas fa-lightbulb fa-3x"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="lead text-white">
                                Sistem ini dapat membantu Anda dalam pengambilan keputusan menggunakan Metode COPRAS.
                            </p>
                            <p class="text-white">Pada tahun 1996, para peneliti Vilnus Gedimas Technical University menciptakan suatu 
                                metode evaluasi proporsional yang kompleks yaitu COPRAS (Complex Proportional Assessment).
                                Metode COPRAS (Complex Proportional Assessment) dapat digunakan untuk pengambilan keputusan 
                                dengan memaksimalkan dan meminimalkan nilai kriteria. Dalam metode ini tipe kriteria
                                yang menguntungkan dan merugikan secara terpisah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card bg-gradient-success">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="card-title text-white">Cara Penggunaan dalam pengambilan keputusan menggunakan Metode COPRAS</h2>
                                <i class="fas fa-info-circle fa-3x text-white"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <ol class="text-white">
                                <li>Masuk ke menu "Kriteria & Bobot" untuk menambahkan kriteria beserta bobotnya.</li>
                                <li>Gunakan menu "Alternatif " untuk menambahkan alternatif dan nilai skornya.</li>
                                <li>Masuk ke menu "Perhitungan" untuk melakukan proses perhitungan normalisasi matriks keputusan, normalisasi terbobot, nilai maksimal minimal, bobot relatif dan nilai Utilitas.</li>
                                <li>Cek menu "Hasil Akhir" untuk melihat hasilnya.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
