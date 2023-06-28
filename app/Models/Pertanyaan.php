<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $primaryKey = "id_pertanyaan";
    protected $table = "pertanyaan";
    protected $fillable = [
        'id_kuesioner','id_kategori','id_prodi','pertanyaan'
    ];

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori','id_kategori','id_kategori');
    }
    public function kuesioner()
    {
        return $this->belongsTo('App\Models\Kuesioner','id_kuesioner','id_kuesioner');
    }
    public function prodi()
    {
        return $this->belongsTo('App\Models\Prodi','id_prodi','id_prodi');
    }
    public function jawaban()
    {
        return $this->hasMany('App\Models\Jawaban','id_pertanyaan');
    }
}
