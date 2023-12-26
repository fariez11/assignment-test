@extends('layout.main')
@section('nilai', 'active')
@section('container')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Nilai Mahasiswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Data Mata Kuliah</a></li>
                        <li class="breadcrumb-item active">Data Nilai Mahasiswa</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        {{-- <div class="card-header">
                                <h3 class="card-title"></h3>
                            </div> --}}
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="{{ route('penilaian.matkul',$jurusan_id) }}" class="btn btn-secondary">
                                <i data-feather="arrow-left-circle" class="feather-18"></i>
                            kembali
                            </a>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#ajax-modal">
                                <i data-feather="plus-circle" class="feather-18"></i>
                            tambah data nilai
                            </a>
                            <table id="mahasiswa" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>Nama Dosen</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Tugas 1</th>
                                        <th>Tugas 2</th>
                                        <th>UTS</th>
                                        <th>Tugas 3</th>
                                        <th>Tugas 4</th>
                                        <th>UAS</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nilai as $data)
                                        <tr>
                                            <td> {{ $loop->iteration }} </td>
                                            <td> {{ $data->Dosen->nama }} </td>
                                            <td> {{ $data->Mahasiswa->nama }} </td>
                                            <td> {{ $data->tugas1 }} </td>
                                            <td> {{ $data->tugas2 }} </td>
                                            <td> {{ $data->UTS }} </td>
                                            <td> {{ $data->tugas3 }} </td>
                                            <td> {{ $data->tugas4 }} </td>
                                            <td> {{ $data->UAS }} </td>
                                            <td style="width: 40px;">
                                                <a href="#" class="btn btn-default" data-toggle="modal" data-target="#ajax-modal-{{ $data->id }}">
                                                    <i data-feather="edit"class="feather-15"></i>
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

        @include('penilaian.include.modaladd')
        @include('penilaian.include.modaledit')
    </section>
@endsection

