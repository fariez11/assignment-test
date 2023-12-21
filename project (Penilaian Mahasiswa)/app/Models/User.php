<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes;

    protected $fillable = [
        'id',
        'email',
        'username',
        'password',
        'role',
    ];

    protected $table = 'mst_user';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    public function Dosen(){
        return $this->hasOne(Dosen::class, 'userId','id');
    }

    public function Mahasiswa(){
        return $this->hasOne(Mahasiswa::class, 'userId','id');
    }
}
