<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Individuo extends Model
{
    protected $fillable=['apelido','nome','ocupacao','idade','tipo','contacto1','contacto2',
        'provincia','distrito','bairro'];

    public function acusacao(){
        return $this->hasMany(Acusacao::class);
    }
//    public function acusacoes(){
//        return $this->belongsToMany(Individuo::class,'acusacaos','acusador_id','acusado_id')->withPivot('motivo','estado','local')->withTimestamps();
//    }

//    public function acusas(){
//        return $this->belongsToMany(Individuo::class,'acusacaos','acusado_id','acusador_id')->withPivot('motivo','estado','local')->withTimestamps();
//    }

}
