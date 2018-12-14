<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
  //quais campos sao
  protected $fillable = ['nome', 'sigla'];
  //protected $guarded = ['senha']; // protege para nao ser gravado - inserçao em massa

    //relaçao 1 - N
    public function cidades(){
      return $this->hasMany('App\Cidade');
    }
}
