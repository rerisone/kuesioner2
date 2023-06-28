<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = "jawaban";

    public function pertanyaan()
    {
        return $this->belongsTo('App\Models\Pertanyaan', 'id_pertanyaan', 'id_pertanyaan');
    }
}
