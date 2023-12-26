@extends('layout.main')
@section('nilai', 'active')
@section('container')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1>Data Nilai</h1>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Nilai</li>
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
                        <div class="card-body">
                            <table id="mahasiswa" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>Nama Dosen</th>
                                        <th>Nama Matkul</th>
                                        <th>Tugas 1</th>
                                        <th>Tugas 2</th>
                                        <th>UTS</th>
                                        <th>Tugas 3</th>
                                        <th>Tugas 4</th>
                                        <th>UAS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nilai as $data)
                                        <tr>
                                            <td> {{ $loop->iteration }} </td>
                                            <td> {{ $data->Dosen->nama }} </td>
                                            <td> {{ $data->Matkul->matkul }} </td>
                                            <td> {{ $data->tugas1 }} </td>
                                            <td> {{ $data->tugas2 }} </td>
                                            <td> {{ $data->UTS }} </td>
                                            <td> {{ $data->tugas3 }} </td>
                                            <td> {{ $data->tugas4 }} </td>
                                            <td> {{ $data->UAS }} </td>
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
