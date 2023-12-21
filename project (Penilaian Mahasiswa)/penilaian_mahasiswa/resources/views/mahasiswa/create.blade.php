@extends('layout.main')
@section('mahasiswa','active')
@section('container')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Data Mahasiswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('mahasiswa.index') }}">Data Mahasiswa</a></li>
                        <li class="breadcrumb-item active">Tambah Data Mahasiswa</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <form action="{{ route('mahasiswa.store') }}" method="POST"class="form-validate"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <input type="hidden" class="form-control" name="id" value="{{ $id + 1 }}">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama" id="nama"
                                            placeholder="nama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="username" id="nama"
                                            placeholder="username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="password" id="password"
                                            placeholder="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">NIM</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="nim" id="nim"
                                            placeholder="nim">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jurusan</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="jurusanId" style="width: 100%;">
                                            <option></option>
                                            @foreach ($majors as $major)
                                                <option value="{{ $major->id }}"> {{ $major->namaJurusan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="alamat" id="alamat"
                                            placeholder="alamat">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kota</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="kota" id="kota"
                                            placeholder="kota">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kontak</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="kontak" id="kontak"
                                            placeholder="kontak">
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('mahasiswa.index') }}" class="btn btn-default"
                                    data-dismiss="modal">Batal</a>
                                <button class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('script')
        <script>
            $(document).ready(function() {

                $('.alert').alert()

            })
        </script>
    @endpush
@endsection
