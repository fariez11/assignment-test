<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => '1',
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'password' => Hash::make('admin123#'),
            'role' => 'admin',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        User::create([
            'id' => '2',
            'email' => 'dosen@gmail.com',
            'username' => 'dosen',
            'password' => Hash::make('dosen123#'),
            'role' => 'dosen',
            'created_at' => date('Y-m-d H:i:s',strtotime(' + 30 seconds'))
        ]);
        User::create([
            'id' => '3',
            'email' => 'siswanto98@admin.com',
            'username' => 'siswanto',
            'password' => Hash::make('dosen123#'),
            'role' => 'dosen',
            'created_at' => date('Y-m-d H:i:s',strtotime(' + 45 seconds'))
        ]);
        User::create([
            'id' => '4',
            'email' => 'kevin12@admin.com',
            'username' => 'kevin',
            'password' => Hash::make('Password123#'),
            'role' => 'mahasiswa',
            'created_at' => date('Y-m-d H:i:s',strtotime(' + 60 seconds'))
        ]);
    }
}
