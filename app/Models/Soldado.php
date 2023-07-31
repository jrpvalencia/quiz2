<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soldado extends Model
{
    use HasFactory;
    //Relacion muchos a muchos
    public function servicios(){
        return $this->belongsToMany('App\Models\Servicio');
    }
    // Relacion Uno a Muchos 
    public function cuerpos(){
        return $this->hasMany('App\Models\CuerpoEsp');
    }
    //Relacion Uno a Muchos
    public function compañias(){
        return $this->belongsTo('App\Models\Compañia');
    }
    //Relacion Uno a Muchos
    public function cuarteles(){
        return $this->belongsTo('App\Models\Cuartel');
    }
    //Relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne('App\Models\Images','images');
    }
}
