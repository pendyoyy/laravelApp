<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model {
    protected $fillable = [
        'name'
    ];

//    public function transaksi() {
//        return $this->belongsTo(NilaiTugas::class, "mapal_id", "id");
//    }
}
