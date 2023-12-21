<div class="modal fade" id="ajax-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah data mata kuliah</h4>
            </div>
            <form action="{{ route('matakuliah.store') }}" id="form_action" method="POST" class="form-validate"
                enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf

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
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jurusan</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="jurusanId" style="width: 100%;">
                                <option></option>
                                @foreach ($majors as $major)
                                    <option value="{{ $major->id }}"> {{ $major->namaJurusan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Mata Kuliah</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="matkul" placeholder="nama matakuliah"
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
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
