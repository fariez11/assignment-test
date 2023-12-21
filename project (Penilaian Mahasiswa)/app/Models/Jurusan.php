<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $guarded =[
        'id'
    ];

    public $table = "mst_jurusan";

    public function Mahasiswa(){
        return $this->hasMany(Mahasiswa::class, 'id','jurusanId');
    }

    public function Matkul(){
        return $this->hasMany(MataKuliah::class, 'id','jurusanId');
    }
}
