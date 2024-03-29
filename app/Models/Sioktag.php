<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sioktag extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function penyelesaian(){
        return $this->hasOne(Penyelesaian::class);
    }
}
