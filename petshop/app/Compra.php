<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
  protected $fillable = [
 'user_id',
 'produto_id',
 'quantidade',
 'data'
];

public function produtos()
    {
          return $this->belongsTo('App\Produto');
    }

public function user()
    {
          return $this->belongsTo('App\User');
    }

}
