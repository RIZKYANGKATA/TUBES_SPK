@extends('layout.template')

@section('title', 'Dashboard')

@section('content')
     <div class="container">
        <h1>Sistem Pendukung Keputusan menggunakan Metode COPRAS</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Alternatif</th>
                    @foreach ($kriteria as $k)
                        <th>{{ $k->nama }}</th>
                    @endforeach
                    <th>Nilai COPRAS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alternatif as $alt)
                    <tr>
                        <td>{{ $alt->nama }}</td>
                        @foreach ($kriteria as $k)
                            <td>{{ $normalisasiMatriks[$alt->id][$k->id] }}</td>
                        @endforeach
                        <td>{{ $nilaiCOPRAS[$alt->id] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

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
