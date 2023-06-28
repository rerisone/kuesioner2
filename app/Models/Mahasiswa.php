<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";
    protected $fillable = [
        'nama','nim','jenis_kelamin','program_studi','status_isi','created_at','updated_at'
    ];

    public function prodi()
    {
        return $this->belongsTo('App\Models\Prodi', 'id_prodi', 'id_prodi');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user', 'id_user');
    }
}
