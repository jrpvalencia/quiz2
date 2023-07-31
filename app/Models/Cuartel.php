<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuartel extends Model
{
    use HasFactory;
    //Relacion Uno a Muchos (Inversa)
    public function soldados(){
        return $this->belongsTo('App\Models\Soldado');
    }
           //Relacion muchos a muchos
    public function compañias(){
        return $this->belongsToMany('App\Models\Compañia');
    }
    //Relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne('App\Models\Images','images');
    }

}
