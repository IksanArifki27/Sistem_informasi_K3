<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyelesaian extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function sioktag(){
        return $this->belongsTo(Sioktag::class);
    }
}
