@extends('layout.template')

@section('title', 'Dashboard')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Hasil Akhir</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tabel Nilai Utilitas dan Ranking</h3>
            </div>
            <div class="card-body">
                @php
                    // Buat array untuk menyimpan informasi peringkat
                    $ranking = [];
                    foreach ($utilitas as $key => $value) {
                        $ranking[$key] = $value;
                    }

                    // Urutkan array $ranking berdasarkan nilai utilitas secara descending
                    arsort($ranking);
                @endphp
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Alternatif</th>
                            <th>Nilai Utilitas</th>
                            <th>Ranking</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            // Inisialisasi variabel counter
                            $counter = 1;
                        @endphp
                        @foreach($ranking as $key => $value)
                            <tr>
                                <td>{{ $alternatif->where('id', $key)->first()->nama_alternatif }}</td>
                                <td>{{ number_format($value, 3) }}</td>
                                <td>{{ $counter }}</td>
                            </tr>
                            @php
                                $counter++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <style>
        .custom-table {
            width: 100%;
            border-collapse: collapse;
        }
    
        .custom-table th, .custom-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
    </style>
    
    <script></script>
@endsection

@push('css')
    <!-- Tambahkan link CSS Bootstrap atau AdminLTE jika belum ditambahkan -->
@endpush

@push('scripts')
    <!-- Tambahkan link script Bootstrap atau AdminLTE jika belum ditambahkan -->
@endpush
