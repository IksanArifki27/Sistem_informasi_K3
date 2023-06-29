<?php

namespace App\Models;

use App\Models\Lokasi;
use App\Models\BarangMasuk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function lokasi(){
        return $this->belongsTo(Lokasi::class);
    }

    public  function barangMasuk(){
        return $this->hasMany(BarangMasuk::class);
    }
}
