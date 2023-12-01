@extends('layouts.template')

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

    <!-- Table AS -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3 class="card-title"></i>Perankingan</h3>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover custom-table">
                    <thead>
                        <tr>
                            <th>Nama Alternatif</th>
                            <th>AS</th>
                            <th>Ranking</th>
                        </tr>   
                    </thead>
                    <tbody>
                        {{-- @foreach ($alternatif as $item_alternatif)
                            <tr>
                                <td>{{ $item_alternatif->nama_alternatif }}</td>
                                <td>{{ $as[$item_alternatif->id] }}</td>
                            </tr>
                        @endforeach --}}
                        @foreach ($as as $key => $value)
                        @if ($value == 0)
                            <tr>
                                <td>{{ $key }}</td>
                                <td>{{ $value }}</td>
                                <td>{{$loop->iteration}}</td>
                            </tr>
                        @else
                            <tr>
                                <td>{{ $key }}</td>
                                <td>{{ number_format($value, 4) }}</td>
                                <td>{{$loop->iteration}}</td>
                            </tr>
                        @endif
                        @endforeach

                    </tbody>
                </table>
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
@endpush

@push('scripts')
@endpush
