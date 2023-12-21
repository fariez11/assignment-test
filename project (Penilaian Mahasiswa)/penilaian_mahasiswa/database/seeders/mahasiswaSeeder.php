<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create([
            'id' => 1,
            'userId' => 4,
            'jurusanId' => 1,
            'nim' => 90001,
            'nama' => 'Kevin Saputra',
            'alamat' => 'Batu',
            'kota' => 'Malang',
            'kontak' => '089234234532',
            'status' => 'aktif',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
