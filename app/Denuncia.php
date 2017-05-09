<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    protected $fillable=['designacao','descricao'];

    public function acusacao(){
        return $this->belongsTo(Acusacao::class);
    }
}
