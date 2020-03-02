<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Kelas extends Model
{
    protected $fillable = ['jurusan_id','nama_kelas','wali_kelas_id'];

    public function Guru()
    {
        return $this->belongsTo('App\Guru','wali_kelas_id');
    }

    public function Jurusan()
    {
        return $this->belongsTo('App\Jurusan','jurusan_id');
    }
}
