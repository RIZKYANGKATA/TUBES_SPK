@extends('layout.template')

@section('title', 'Dashboard')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Perhitungan</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Menampilkan Bobot -->
    <section class="content">
        <table border="1">
            <thead>
                <tr>
                    <th>Kriteria</th>
                    <th>Bobot</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kriteria as $k)
                    <tr>
                        <td>{{ $k->nama_kriteria }}</td>
                        <td>{{ $k->bobot }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <section class="content">
        <!-- table_matrix.blade.php -->
        <table border="1">
            <thead>
                <tr>
                    <th>Alternatif</th>
                    @foreach($kriteria as $k)
                        <th>{{ $k->nama_kriteria }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($alternatif as $a)
                    <tr>
                        <td>{{ $a->nama_alternatif }}</td>
                        @foreach($kriteria as $k)
                            <td>{{ $nm[$a->id][$k->id] }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>


    <section>
        <!-- table_normalisasi_terbobot.blade.php -->
        <table border="1">
            <thead>
                <tr>
                    <th>Alternatif</th>
                    @foreach($kriteria as $k)
                        <th>{{ $k->nama_kriteria }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($alternatif as $a)
                    <tr>
                        <td>{{ $a->nama_alternatif }}</td>
                        @foreach($kriteria as $k)
                            <td>{{ $nmt[$a->id][$k->id] }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <section>
        <!-- table_utilitas.blade.php -->
        <table border="1">
            <thead>
                <tr>
                    <th>Alternatif</th>
                    <th>Nilai Utilitas</th>
                    <th>Ranking</th>
                </tr>
            </thead>
            <tbody>
                @foreach($utilitas as $key => $value)
                    <tr>
                        <td>{{ $alternatif->where('id', $key)->first()->nama_alternatif }}</td>
                        <td>{{ $value }}</td>
                        <td>{{ $loop->iteration }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
@endpush

@push('scripts')
@endpush
