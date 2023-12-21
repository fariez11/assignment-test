@extends('layout.main')
@section('matkul', 'active')
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
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#ajax-modal">
                                <i data-feather="plus-circle" class="feather-18"></i>
                                tambah data mata kuliah
                            </a>
                            <table id="mahasiswa" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>Jurusan</th>
                                        <th>Mata Kuliah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($matkuls as $matkul)
                                        <tr>
                                            <td> {{ $loop->iteration }} </td>
                                            <td> {{ $matkul->namaJurusan }} </td>
                                            <td> {{ $matkul->matkul }} </td>
                                            <td style="width: 90px;">
                                                <a href="{{ route('matakuliah.edit', $matkul->id) }}" class="btn btn-default" data-toggle="modal" data-target="#ajax-modal-{{ $matkul->id }}">
                                                    <i data-feather="edit"class="feather-15"></i>
                                                </a>
                                                <form class="d-inline" method="post" action="{{ route('matakuliah.delete', $matkul->id) }}">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-default" onclick="return confirm('Apakah anda yakin?')">
                                                        <i data-feather="trash-2" class="feather-15"></i></button>
                                                </form>
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

    @include('matakuliah.include.modaladd')
    @include('matakuliah.include.modaledit')
@endsection
@push('scripts')
@endpush
