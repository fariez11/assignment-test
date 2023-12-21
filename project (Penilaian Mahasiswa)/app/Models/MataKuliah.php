<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MataKuliah extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded =[
        'id'
    ];


    public $table = "mst_matkul";

    public function Nilai(){
        return $this->hasMany(Nilai::class, 'id','matkulId');
    }

    public function Jurusan(){
        return $this->belongsTo(Jurusan::class, 'jurusanId','id');
    }
}
