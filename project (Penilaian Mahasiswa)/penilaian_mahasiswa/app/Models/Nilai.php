<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $guarded =[
        'id'
    ];

    public $table = "mst_nilai";

    public function Mahasiswa(){
        return $this->belongsTo(Mahasiswa::class, 'mahasiswaId','id');
    }
    public function Dosen(){
        return $this->belongsTo(Dosen::class, 'dosenId','id');
    }

    public function Matkul(){
        return $this->belongsTo(MataKuliah::class, 'matkulId','id');
    }
}
