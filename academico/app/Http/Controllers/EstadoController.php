<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;

class EstadoController extends Controller
{


  public function __construct(){
    $this->middleware('auth')->except('index'); // except protege o dado
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // exibe a lista do nosso estado
    {
      $estados = Estado::all();
      return view('estados.index')->with('estados', $estados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // faz a persistencia dos dados
    {
      // PROCESSO DE PERCISTENCIA..
      //dd($request)->all(); // dependendo do modo pode gerar objeto.. all equivale a imprmir o $post no PHP
        // Validação deve ser repedida aqui no lado servidor... tem q ser redudante aqui

        //Gravar
        Estado::create($request->all());
        return redirect('/estados');// quem trabalha com wamp.. quando passar /estados com barra da problemas
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado) //  public function show($id)  exibir
    {
      //id
      //$estado = Estado::find($id)...  se o paramentro for Estado $estado
      return view('estados.show')->with('estado', $estado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Estado $estado)
    {
      //return view('estados.edit'); // se fosse so formulario
      return view('estados.edit')->with('estado', $estado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estado $estado) // com estado ja vem preenchido.. estado sai atualizado...dados que vao ser atualizados estao dentro de request
    {
      //dd($estado);
      //dd($request->all());

      //$estado->nome = $request->nome; // desvantagem.. se tiver 30 campos na tabela.. tem q fazer os 30
      $estado->fill($request->all());
      $estado->save();

      session()->flash('mensagem', 'Estado alutalizado com sucesso!');

      return redirect()->route('estados.show', $estado->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estado $estado)
    {
        //Validação - chave estrangeira
        $estado->delete();
        session()->flash('mensagem', 'Estado excluido com sucesso!');
        return redirect()->route('estados.index');
    }
}
