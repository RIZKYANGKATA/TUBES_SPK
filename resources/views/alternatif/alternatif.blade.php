@extends('layout.template')

@section('title', 'Dashboard')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Alternatif</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3 class="card-title"></i>Data Alternatif</h3>
                <button type="button" class="btn btn-sm btn-success ml-auto" data-toggle="modal" data-target="#exampleModal">
                    + Tambah Data
                </button>
            </div>


            <div class="card-body">
                <table class="table table-bordered table-hover custom-table">
                    <thead>
                        <tr>
                            <th>Nama Alternatif</th>
                            @foreach ($kriteria as $krt)
                                <th>C{{ $loop->iteration }}</th>
                            @endforeach
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alternatif as $item)
                            <tr>
                                <td>{{ $item->nama_alternatif }}</td>
                                @foreach ($kriteria as $krt)
                                    <td>
                                        @php
                                            $ak = $alternatifKriteriaGrouped[$item->id][$krt->id] ?? null;
                                        @endphp

                                        @if ($ak)
                                            {{ $ak[0]->value }}
                                        @endif
                                    </td>
                                @endforeach

                                <td>
                                    <button data-toggle="modal" data-target="#inputNilai"
                                        onclick='setAlternatif(@json($item))' class="btn btn-warning">Input
                                        Nilai</button>
                                    {{-- <form action="{{ url('kriteria/' . $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Hapus</button>
                                    </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('alternatif') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama Alternatif</label>
                                        <input type="text" class="form-control" id="nama"
                                            placeholder="Masukkan nama alternatif" name="nama_alternatif">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="inputNilai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="namaAlternatif"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('alternatif_kriteria') }}" method="POST">
                                @csrf
                                <input name="id_alternatif" id="idAlternatif" type="hidden">
                                @foreach ($kriteria as $krt)
                                    <div class="form-group">
                                        <label for="nama">{{ $krt->nama_kriteria }}</label>
                                        <select name="value[]" id="idKriteria" class="form-control">
                                            @foreach ($subKriteria as $sk)
                                                @if ($sk->id_kriteria == $krt->id)
                                                    <option value="{{ $sk->value }}">{{ $sk->range_kriteria }}</option>
                                                @endif
                                            @endforeach
                                            <input name="id[]" id="idKriteria" type="hidden"
                                                value="{{ $krt->id }}">
                                            {{-- <input type="text" class="form-control" id="nama"
                                            placeholder="Masukkan nama alternatif" name="value[]"> --}}
                                    </div>
                                @endforeach
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <script>
        let alternatif;

        function setAlternatif(newAlternatif) {
            alternatif = newAlternatif;
            console.log(alternatif);
            document.getElementById('namaAlternatif').innerHTML = alternatif.nama_alternatif;
            document.getElementById('idAlternatif').value = alternatif.id;
        }
    </script>

    <style>
        .custom-table {
            width: 100%;
            border-collapse: collapse;
        }

        .custom-table th,
        .custom-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
    </style>
@endsection

@push('css')
@endpush

@push('scripts')
    {{--    <script> --}}
    {{--        alert('Selamat Datang'); --}}
    {{--    </script> --}}
@endpush
