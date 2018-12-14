<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
    'nome',
    'imagem',
    'email',
    'telefone',
    'endereco'
  ];
  public function servicos()
      {
        return $this->hasMany('App\Servico', 'empresa_id');
      }

}
