<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class matkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MataKuliah::create([
            'jurusanId' => 1,
            'matkul' => 'Ilmu Komunikasi Dan Organisasi',
        ]);
        MataKuliah::create([
            'jurusanId' => 1,
            'matkul' => 'Aplikasi Komputer Perkantoran',
        ]);
        MataKuliah::create([
            'jurusanId' => 1,
            'matkul' => 'Bahasa Inggris 1',
        ]);
        MataKuliah::create([
            'jurusanId' => 1,
            'matkul' => 'Konsep Teknologi Informasi',
        ]);
        MataKuliah::create([
            'jurusanId' => 2,
            'matkul' => 'Pengembangan Perangkat Lunak Berbasis Objek',
        ]);
        MataKuliah::create([
            'jurusanId' => 2,
            'matkul' => 'Desain & Pemrograman Web',
        ]);
        MataKuliah::create([
            'jurusanId' => 2,
            'matkul' => 'Basis Data',
        ]);
    }
}
