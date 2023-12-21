<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory,SoftDeletes;

    // protected $fillable = [
    //     'alamat',
    //     'kontak',
    //     'kota',
    //     'asal_sekolah',
    //     'role',
    // ];

    protected $guarded =[
        'id'
    ];


    public $table = "mst_mahasiswa";
    protected $dates = ['deleted_at'];

    public function User(){
        return $this->belongsTo(User::class, 'userId','id');
    }

    public function Jurusan(){
        return $this->belongsTo(Jurusan::class, 'jurusanId','id');
    }

    public function Nilai(){
        return $this->hasMany(Nilai::class, 'mahasiswaId','id');
    }
}
