<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = DB::table('mst_dosen')
            ->join('mst_user', 'mst_user.id', '=', 'mst_dosen.userId')
            ->where('role', 'dosen')
            ->where('mst_user.deleted_at', null)
            ->orderByDesc('mst_user.id')
            ->get();

        return view('dosen.index', [
            'data' => $dosen,
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

        return view('dosen.create', [
            'id' => $id,
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
        $validated = $request->validate([
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
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
            'role' => 'dosen',
        ]);
        Dosen::create([
            'userId' => $request->id,
            'nama' => ucfirst($request->nama),
            'alamat' => ucfirst($request->alamat),
            'kota' => ucfirst($request->kota),
            'kontak' => $request->kontak,
            'status' => 'aktif',
        ]);

        return redirect()->route('dosen.index');
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
        $edit = DB::table('mst_dosen')
            ->join('mst_user', 'mst_user.id', '=', 'mst_dosen.userId')
            ->where('mst_dosen.userId', $id)
            ->get();

        $major = DB::table('mst_jurusan')->get();

        return view('dosen.edit', [
            'id' => $id,
            'edit' => $edit,
            'majors' => $major,
        ]);
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
            'email' => 'required',
            'username' => 'required',
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
            'role' => 'dosen'
        ]);

        $updateMhs = Dosen::where('userId','=',$id)->firstOrFail();
        $updateMhs->update([
            'nama' => ucfirst($request->nama),
            'alamat' => ucfirst($request->alamat),
            'kota' => ucfirst($request->kota),
            'kontak' => $request->kontak,
            'status' => 'aktif'
        ]);

        return redirect()->route('dosen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dosen::where('userId','=',$id)->firstOrFail()->delete();
        User::findOrFail($id)->delete();

        return redirect()->route('dosen.index');
    }
}
