<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matkul = DB::table('mst_matkul')
            ->select('mst_matkul.id','mst_matkul.jurusanId','namaJurusan','matkul')
            ->join('mst_jurusan', 'mst_jurusan.id', '=', 'mst_matkul.jurusanId')
            ->where('mst_matkul.deleted_at',null)
            ->get();
        $major = DB::table('mst_jurusan')->get();

        return view('matakuliah.index',[
            'matkuls' => $matkul,
            'majors' => $major
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matakuliah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'jurusanId' => 'required',
            'matkul' => 'required',
        ]);

        Matakuliah::create([
            'jurusanId' => $request->jurusanId,
            'matkul' => $request->matkul
        ]);

        return redirect()->route('matakuliah.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'jurusanId' => 'required',
            'matkul' => 'required',
        ]);

        $updateMatkul = Matakuliah::findOrFail($id);
        $updateMatkul->update([
            'jurusanId' => $request->jurusanId,
            'matkul' => $request->matkul
        ]);

        return redirect()->route('matakuliah.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Matakuliah::findOrFail($id)->delete();

        return redirect()->route('matakuliah.index');
    }
}
