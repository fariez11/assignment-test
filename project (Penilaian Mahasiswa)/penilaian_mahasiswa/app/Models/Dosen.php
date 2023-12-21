<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dosen extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded =[
        'id'
    ];


    public $table = "mst_dosen";
    protected $dates = ['deleted_at'];

    public function User(){
        return $this->belongsTo(User::class, 'userId','id');
    }
}
