<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;

class jurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::create([
            'namaJurusan' => 'Manajemen Informatika',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        Jurusan::create([
            'namaJurusan' => 'Teknik Informatika',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
