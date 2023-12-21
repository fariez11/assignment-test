@foreach ($matkuls as $data)
    <div class="modal fade" id="ajax-modal-{{ $data->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah data mata kuliah</h4>
                </div>
                <form action="{{ route('matakuliah.update', $data->id) }}" id="form_action" method="POST" class="form-validate"
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Jurusan</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="jurusanId" style="width: 100%;">
                                    @foreach ($majors as $major)
                                        <option value="{{ $major->id }}"
                                            {{ $data->jurusanId == $major->id ? 'selected' : '' }}>
                                            {{ $major->namaJurusan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Mata Kuliah</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="matkul" value="{{ $data->matkul }}" autocomplete="off">
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
