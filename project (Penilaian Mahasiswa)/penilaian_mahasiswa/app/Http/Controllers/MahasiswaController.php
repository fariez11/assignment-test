<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = DB::table('mst_mahasiswa')
            ->join('mst_user', 'mst_user.id', '=', 'mst_mahasiswa.userId')
            ->join('mst_jurusan', 'mst_jurusan.id', '=', 'mst_mahasiswa.jurusanId')
            ->where('mst_user.deleted_at', null)
            ->where('role', 'mahasiswa')
            ->orderByDesc('mst_user.id')
            ->get();

        return view('mahasiswa.index', [
            'data' => $mahasiswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = DB::table('mst_user')->latest('created_at')->first()->id;
        $major = DB::table('mst_jurusan')->get();

        return view('mahasiswa.create', [
            'id' => $id,
            'majors' => $major
        ]);
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
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
            'jurusanId' => 'required',
            'nim' => 'required|numeric',
            'nama' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'kontak' => 'required|numeric',
        ]);
        User::create([
            'id' => $request->id,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'mahasiswa'
        ]);
        Mahasiswa::create([
            'userId' => $request->id,
            'jurusanId' => $request->jurusanId,
            'nim' => $request->nim,
            'nama' => ucfirst($request->nama),
            'alamat' => ucfirst($request->alamat),
            'kota' => ucfirst($request->kota),
            'kontak' => $request->kontak,
            'status' => 'aktif'
        ]);

        return redirect()->route('mahasiswa.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = DB::table('mst_mahasiswa')
                ->join('mst_user', 'mst_user.id', '=', 'mst_mahasiswa.userId')
                ->where('mst_mahasiswa.userId',$id)
                ->get();

        $major = DB::table('mst_jurusan')->get();

        return view('mahasiswa.edit', [
            'id' => $id,
            'edit' => $edit,
            'majors' => $major
        ]);
    }

    public function update(Request $request,$id){
        $validated = $request->validate([
            'email' => 'required',
            'username' => 'required',
            'jurusanId' => 'required',
            'nim' => 'required|numeric',
            'nama' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'kontak' => 'required|numeric',
        ]);


        $updateUser = User::findOrFail($id);
        $updateUser->update([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'mahasiswa'
        ]);

        $updateMhs = Mahasiswa::where('userId','=',$id)->firstOrFail();
        // dd($updateMhs);
        $updateMhs->update([
            'jurusanId' => $request->jurusanId,
            'nim' => $request->nim,
            'nama' => ucfirst($request->nama),
            'alamat' => ucfirst($request->alamat),
            'kota' => ucfirst($request->kota),
            'kontak' => $request->kontak,
            'status' => 'aktif'
        ]);

        return redirect()->route('mahasiswa.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function active(Request $request, $id)
    // {

    //     $data = DB::table('tb_calon_siswa')->where('user_id', $id)->update(['status' => 'aktif']);

    //     return back();
    // }

    // public function nonactive(Request $request, $id)
    // {

    //     $data = DB::table('tb_calon_siswa')->where('user_id', $id)->update(['status' => 'non-aktif']);

    //     return back();
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mahasiswa::where('userId','=',$id)->firstOrFail()->delete();
        User::findOrFail($id)->delete();

        return redirect()->route('mahasiswa.index');
    }
}
