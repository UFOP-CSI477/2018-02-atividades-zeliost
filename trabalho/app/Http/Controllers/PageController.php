<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;

class PageController extends Controller
{
  public function search(Request $request){
    $text = $request->pesquisar;
    $servicos = Servico::where('servico', 'LIKE', "%${text}%")
    ->orWhere('email', 'LIKE', "%${text}%")->orWhere('telefone', 'LIKE', "%${text}%")->get();
    return view('servicos.index')
              ->with('servicos', $servicos);

  }
}
