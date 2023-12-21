@foreach ($nilai as $edit)
    <div class="modal fade" id="ajax-modal-{{ $edit->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit data mata nilai</h4>
                </div>
                <form action="{{ route('nilai.update',$edit->id) }}" method="POST"
                    class="form-validate"enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">

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
                        <input type="hidden" class="form-control" name="jurusan" value="{{ $jurusan_id }}" readonly>
                        <input type="hidden" class="form-control" name="matkul" value="{{ $matkul_id }}" readonly>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Mahasiswa</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="mahasiswaId"
                                    value="{{ $edit->Mahasiswa->nama }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nilai Tugas 1</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="tugas1" value="{{ $edit->tugas1 }}"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nilai Tugas 2</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="tugas2" value="{{ $edit->tugas2 }}"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nilai UTS</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="uts" value="{{ $edit->UTS }}"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nilai Tugas 3</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="tugas3" value="{{ $edit->tugas3 }}"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nilai Tugas 4</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="tugas4" value="{{ $edit->tugas4 }}"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nilai UAS</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="uas" value="{{ $edit->UAS }}"
                                    autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
