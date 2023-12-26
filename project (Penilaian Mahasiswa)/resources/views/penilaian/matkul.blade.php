@extends('layout.main')
@section('nilai', 'active')
@section('container')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Mata Kuliah</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Mata Kuliah</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        {{-- <div class="card-header">
                                <h3 class="card-title"></h3>
                            </div> --}}
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="{{ route('penilaian.index') }}" class="btn btn-secondary">
                                <i data-feather="arrow-left-circle" class="feather-18"></i>
                            kembali
                            </a>
                            <table id="mahasiswa" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>Mata Kuliah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($matkuls as $matkul)
                                        <tr>
                                            <td> {{ $loop->iteration }} </td>
                                            <td> {{ $matkul->matkul }} </td>
                                            <td style="width: 90px;">
                                                <a href="{{ route('penilaian.mahasiswa',[$jurusan_id, $matkul->id]) }}" class="btn btn-default">
                                                    <i data-feather="users" class="feather-15"></i>
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
@endpush
