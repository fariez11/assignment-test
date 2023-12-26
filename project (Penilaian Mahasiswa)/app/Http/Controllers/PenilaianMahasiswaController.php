<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Jurusan;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Contracts\Database\Eloquent\Builder;

class PenilaianMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $matkul = DB::table('mst_matkul')
        //     ->select('mst_matkul.id', 'mst_matkul.jurusanId', 'namaJurusan', 'matkul')
        //     ->join('mst_jurusan', 'mst_jurusan.id', '=', 'mst_matkul.jurusanId')
        //     ->where('mst_matkul.deleted_at', null)
        //     ->get();

        $jurusan = Jurusan::where('deleted_at', null)->get();

        return view('penilaian.index', [
            'jurusans' => $jurusan,
        ]);
    }

    public function matkul($id)
    {
        $matkul = MataKuliah::where('jurusanId', $id)->where('deleted_at', null)->get();

        return view('penilaian.matkul', [
            'matkuls' => $matkul,
            'jurusan_id' => $id,
        ]);
    }

    public function mahasiswa($jurusan, $matkulId)
    {
        $nilai = Nilai::with(['Mahasiswa', 'Matkul'])->where('matkulId', $matkulId)->get();
        $matkul = MataKuliah::where('id', $matkulId)->first();
        $mahasiswa = Mahasiswa::where('jurusanId',$jurusan)->get();

        return view('penilaian.nilai', [
            'jurusan_id' => $jurusan,
            'matkul_id' => $matkulId,
            'nilai' => $nilai,
            'matakuliah' => $matkul,
            'mahasiswa' => $mahasiswa,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'mahasiswaId' => 'required',
            'tugas1' => 'required',
        ]);

        // dd($validated);

        Nilai::create([
            'dosenId' => 2,
            'mahasiswaId' => $request->mahasiswaId,
            'matkulId' => $request->matkul,
            'tugas1' => $request->tugas1,
            'tugas2' => $request->tugas2,
            'UTS' => $request->uts,
            'tugas3' => $request->tugas3,
            'tugas4' => $request->tugas4,
            'UAS' => $request->uas,
        ]);

        return redirect()->route('penilaian.mahasiswa', [$request->jurusan, $request->matkul]);

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'mahasiswaId' => 'required',
            'tugas1' => 'required',
        ]);

        $update = Nilai::findOrFail($id);

        $update->update([
            'tugas1' => $request->tugas1,
            'tugas2' => $request->tugas2,
            'UTS' => $request->uts,
            'tugas3' => $request->tugas3,
            'tugas4' => $request->tugas4,
            'UAS' => $request->uas,
        ]);

        return redirect()->route('penilaian.mahasiswa', [$request->jurusan, $request->matkul]);
    }

    public function destroy($id)
    {
        //
    }
}
