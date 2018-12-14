<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
  protected $fillable = [
    'user_id',
    'empresa_id',
    'servico',
    'imgservico',
    'email',
    'telefone',
    'distancia'

  ];

  public function user()
  {
    return $this->belongsTo('App\User', 'user_id');
    //return $this->belongsTo('App\User', 'user_id', 'id');
  }

  public function empresa()
  {
    return $this->belongsTo('App\Empresa', 'empresa_id');
    //return $this->belongsTo('App\User', 'user_id', 'id');
  }
}
