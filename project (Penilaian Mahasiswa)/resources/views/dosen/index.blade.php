@extends('layout.main')
@section('dosen','active')
@section('container')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Dosen</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Dosen</li>
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
                            <a href="{{ route('dosen.create') }}" class="btn btn-primary">
                                <i data-feather="plus-circle" class="feather-18"></i>
                                tambah data dosen
                            </a>
                            <table id="mahasiswa" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Kontak</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $dosen)
                                        <tr>
                                            <td> {{ $loop->iteration }} </td>
                                            <td> {{ $dosen->nama }} </td>
                                            <td> {{ $dosen->email }} </td>
                                            <td> {{ $dosen->alamat }} </td>
                                            <td> {{ $dosen->kota }} </td>
                                            <td> {{ $dosen->kontak }} </td>
                                            <td style="width: 90px;">
                                                <a href="{{ route('dosen.edit', $dosen->userId) }}" class="btn btn-default"><i data-feather="edit"
                                                        class="feather-15"></i></a>
                                                <form class="d-inline" method="post" action="{{route('dosen.delete',$dosen->userId)}}">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-default" onclick="return confirm('Apakah anda yakin?')"><i data-feather="trash-2"
                                                        class="feather-15"></i></button>
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

@endsection
@push('script')
@endpush
