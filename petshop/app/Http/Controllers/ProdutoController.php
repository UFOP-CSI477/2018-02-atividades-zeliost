<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Produto;

class ProdutoController extends Controller
{

  public function __construct(){
    $this->middleware('auth')->except('index'); // except protege o dado
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $produtos = Produto::get()->sortBy('nome');
      return view ('produtos.index')->with('produtos', $produtos);
      //return $produtos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $formInput = $request->except('imagem');
      //validação
      $this->validate($request,[
        'nome'=>'required',
        'preco'=>'required',
        'imagem'=>'image|mimes:png,jpg,jpeg|max:10000',
      ]);

      // upload da imagem
      $imgservico = $request->imagem;
      if($imgservico){
        $imagemName = $imgservico->getClientOriginalName();
        $imgservico->move('images', $imagemName);
        $formInput['imagem']=$imagemName;
      }
      Produto::create($formInput);
      return redirect()->route('produtos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        return view('produtos.show')->with('produto', $produto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $produtos = Produto::find($id);
      return view('produtos.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->validate([
      'nome'=>'required',
      'preco'=> 'required',
      'imagem' => 'required'
    ]);

    $produto = Produto::find($id);
    $produto->nome = $request->get('nome');
    $produto->preco = $request->get('preco');
    $produto->imagem = $request->get('imagem');
    $produto->save();

    return redirect('/produtos')->with('parabens', 'Produto atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $produtos = Share::find($id);
      $produtos->delete();

     return redirect('/produtos')->with('parabens', 'Produto deletado com sucesso');
        //
    }
}
