<?php

namespace App\Models;

use App\Models\Departemen;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lokasi extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function barang(){
        return $this->hasMany(Barang::class);
    }
}
