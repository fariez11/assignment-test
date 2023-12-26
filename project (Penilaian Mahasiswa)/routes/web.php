<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\PenilaianMahasiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'index'])->name('home');
Route::post('/login', [LoginController::class, 'login'])->name('auth.login');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');
});

Route::group(['middleware' => ['auth', 'is_admin']], function () {
    Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');
    Route::get('/matakulah/create', [MatakuliahController::class, 'create'])->name('matakuliah.create');
    Route::post('/matakulah/create', [MatakuliahController::class, 'store'])->name('matakuliah.store');
    Route::get('/matakulah/edit/{id}', [MatakuliahController::class, 'edit'])->name('matakuliah.edit');
    Route::post('/matakulah/edit/{id}', [MatakuliahController::class, 'update'])->name('matakuliah.update');
    Route::delete('/matakulah/delete/{id}', [MatakuliahController::class, 'destroy'])->name('matakuliah.delete');

    Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
    Route::get('/dosen/create', [DosenController::class, 'create'])->name('dosen.create');
    Route::post('/dosen/create', [DosenController::class, 'store'])->name('dosen.store');
    Route::get('/dosen/edit/{id}', [DosenController::class, 'edit'])->name('dosen.edit');
    Route::post('/dosen/edit/{id}', [DosenController::class, 'update'])->name('dosen.update');
    Route::delete('/dosen/delete/{id}', [DosenController::class, 'destroy'])->name('dosen.delete');

    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
    Route::post('/mahasiswa/create', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
    Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
    Route::post('/mahasiswa/edit/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
    Route::delete('/mahasiswa/delete/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete');
});

Route::group(['middleware' => ['auth', 'is_dosen']], function () {
    Route::get('/mahasiswa/jurusan', [PenilaianMahasiswaController::class, 'index'])->name('penilaian.index');
    Route::get('/mahasiswa/matkul/{id}', [PenilaianMahasiswaController::class, 'matkul'])->name('penilaian.matkul');
    Route::get('/mahasiswa/nilai/{jurusan}/{matkul}', [PenilaianMahasiswaController::class, 'mahasiswa'])->name('penilaian.mahasiswa');

    Route::post('/mahasiswa/nilai/create', [PenilaianMahasiswaController::class, 'store'])->name('penilaian.store');
    Route::post('/mahasiswa/nilai/edit/{id}', [PenilaianMahasiswaController::class, 'update'])->name('penilaian.update');
});

// Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
// Route::get('/jurusan/create', [JurusanController::class, 'create'])->name('jurusan.create');
// Route::post('/jurusan/create', [JurusanController::class, 'store'])->name('jurusan.store');
// Route::get('/jurusan/edit/{id}', [JurusanController::class, 'edit'])->name('jurusan.edit');
// Route::post('/jurusan/edit/{id}', [JurusanController::class, 'update'])->name('jurusan.update');
// Route::delete('/jurusan/delete/{id}', [JurusanController::class, 'destroy'])->name('jurusan.delete');
