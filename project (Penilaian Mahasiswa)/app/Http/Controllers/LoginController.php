<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('login');
    }

    public function login(Request $request)
    {

        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            Session::put('username',$request->user()->username);
            Session::put('role',$request->user()->role);
            if ($request->user()->role == 'dosen') {
                $sesi = User::with('dosen')->where('username',$request->user()->username)->first();
                $request->session()->put('sesi',$sesi->dosen->id);
                $request->session()->put('nama',$sesi->dosen->nama);
            }else if($request->user()->role == 'mahasiswa'){
                $sesi = User::with('mahasiswa')->where('username',$request->user()->username)->first();
                $request->session()->put('id',$sesi->mahasiswa->id);
                $request->session()->put('nama',$sesi->mahasiswa->nama);
            }

            return redirect()->intended('dashboard');

        }

        return back()->withErrors([
            'username' => 'Username dan Password tidak sesuai',
        ])->onlyInput('username');

    }
    public function register()
    {

    }

    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        // Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
