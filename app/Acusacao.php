<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acusacao extends Model
{
    protected $table='acusacaos';
//    protected $primaryKey = ['acusado_id','acusador_id'];
    protected $fillable=['denuncia_id','user_id','individuo_id','nomeacusado','motivo','local','descricao_local','estado'];

    public function users(){
        return $this->belongsTo(User::class);

    }
    public function individuo(){
        return $this->belongsTo(Individuo::class);
}
//    public function acusador(){
//        return $this->belongsTo(Individuo::class);
//    }
    public function denuncia()
    {
        return $this->belongsTo(Denuncia::class);
    }
}
