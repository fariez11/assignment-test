<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class dosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dosen::create([
            'userId' => 1,
            'nama' => 'Administrator',
            'alamat' => 'Suhat',
            'kota' => 'Malang',
            'kontak' => '089234982734',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        Dosen::create([
            'userId' => 2,
            'nama' => 'Budi Utomo',
            'alamat' => 'Sleman',
            'kota' => 'Yogyakarta',
            'kontak' => '0899172874324',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        Dosen::create([
            'userId' => 3,
            'nama' => 'Siswanto',
            'alamat' => 'Ngadiluwih',
            'kota' => 'Kediri',
            'kontak' => '0892349873223',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
