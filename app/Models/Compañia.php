<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compañia extends Model
{
    use HasFactory;
    //Relacion Uno a Muchos (Inversa)
    public function soldados(){
        return $this->belongsTo('App\Models\Soldado');
    }
    //Relacion muchos a muchos
    public function cuarteles(){
        return $this->belongsToMany('App\Models\Cuartel');
    }
}
