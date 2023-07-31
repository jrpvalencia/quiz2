<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuerpoEsp extends Model
{
    use HasFactory;
    public function soldados(){
        return $this->belongsTo('App\Models\Soldado');
    }
}
