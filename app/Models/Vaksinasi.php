<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaksinasi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function penduduk(){
        return $this->belongsTo(Penduduk::class);
    }
    public function vaksin(){
        return $this->belongsTo(Vaksin::class);
    }
    public function lokasi(){
        return $this->belongsTo(Lokasi::class);
    }
}
