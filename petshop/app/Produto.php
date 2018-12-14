<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
  protected $fillable = [
     'nome',
     'preco',
     'imagem'
 ];

 public function compras()
     {
           return $this->hasMany('App\Compra');
     }

}
